<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\CategoryRepository;
use App\Repository\VideoRepository;
use App\Utils\CategoryTreeFrontPage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class FrontController extends AbstractController
{

    private CategoryRepository $categoryRepository;
    private VideoRepository $videoRepository;
    private EntityManagerInterface $entityManager;

    /**
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(
        CategoryRepository $categoryRepository,
        VideoRepository $videoRepository,
        EntityManagerInterface $entityManager
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->videoRepository = $videoRepository;
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name="main_page")
     */
    public function index(): Response
    {
        return $this->render('front/index.html.twig');
    }

    /**
     * @Route("/video-list/category/{categoryname}/{id}/{page}",defaults={"page": "1"}, name="video_list")
     */
    public function videoList($id, $page, CategoryTreeFrontPage $categories, Request $request): Response
    {
        $categories->getCategoryListAndParent($id);
        $ids = $categories->getChildIds($id);
        $ids[] = $id;
        $video = $this->videoRepository->findByChildIds($ids, $page, $request->get('sortby'));

        return $this->render('front/video_list.html.twig', [
            'subcategories' => $categories,
            'videos' => $video,
        ]);
    }



    /**
     * @Route("/video-details/{video}", name="video_details")
     */
    public function videoDetails(VideoRepository $repo, $video): Response
    {
        return $this->render('front/video_details.html.twig', [
            'video'=>$repo->videoDetails($video),
        ]);
    }




    /**
     * @Route("/search-results/{page}", methods={"GET"}, defaults={"page": "1"}, name="search_results")
     */
    public function searchResults($page, Request $request): Response
    {
        $videos = null;
        $query = null;
        if($query = $request->get('query'))
        {
            $videos = $this->videoRepository->findByTitle($query, $page, $request->get('sortby'));
        }

        return $this->render('front/search_results.html.twig', [
            'videos' => $videos,
            'query' => $query,
        ]);
    }

    /**
     * @Route("/pricing", name="pricing")
     */
    public function pricing(): Response
    {
        return $this->render('front/pricing.html.twig');
    }




    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordHasherInterface $password_encoder): Response
    {
        $user = new User;
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $user->setName($request->request->get('user')['name']);
            $user->setLastName($request->request->get('user')['last_name']);
            $user->setEmail($request->request->get('user')['email']);
            $user->setEmail($request->request->get('user')['email']);
            $password = $password_encoder->hashPassword($user, $request->request->get('user')['password']['first']);
            $user->setPassword($password);
            $user->setRoles(['ROLE_USER']);

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            $this->loginUserAutomatically($user, $password);

            return $this->redirectToRoute('admin_main_page');
        }

        return $this->render('front/register.html.twig', [
            'form'=>$form->createView()
        ]);
    }

    public function loginUserAutomatically($user, $password)
    {
        $token = new UsernamePasswordToken(
            $user,
            $password,
            'main',
            $user->getRoles()
        );
        $this->get('security.token_storage')->setToken($token);
        $this->get('session')->set('_security_main', serialize($token));
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $helper): Response
    {
        return $this->render('front/login.html.twig', [
            'error' => $helper->getLastAuthenticationError()
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(): void
    {
        throw new \Exception('This should never be reached');
    }

    /**
     * @Route("/payment", name="payment")
     */
    public function payment(): Response
    {
        return $this->render('front/payment.html.twig');
    }

    public function mainCategories()
    {
        $categories = $this->categoryRepository->findBy(['parent'=>null], ['name'=>'ASC']);
        return $this->render('front/_main_categories.html.twig',[
            'categories'=>$categories
        ]);
    }
}
