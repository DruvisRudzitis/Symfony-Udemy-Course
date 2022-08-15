<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Utils\CategoryTreeAdminList;
use App\Utils\CategoryTreeAdminOptionList;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{

    private EntityManagerInterface $entityManager;

    /**
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/", name="admin_main_page")
     */
    public function index(): Response
    {
        return $this->render('admin/my_profile.html.twig');
    }

    /**
     * @Route("/su/categories", name="categories", methods={"GET", "POST"})
     */
    public function categories(CategoryTreeAdminList $categories, Request $request): Response
    {
        $categories->getCategoryList($categories->buildTree());

        $category = new Category();
        $form = $this->createForm(CategoryType::class);
        $isInvalid = null;

        if($this->saveCategory($form, $request, $category))
        {
            return $this->redirectToRoute('categories');
        }
        elseif ($request->isMethod('post'))
        {
            $isInvalid = 'is-invalid';
        }

        return $this->render('admin/categories.html.twig',[
            'categories'=>$categories->categorylist,
            'form'=>$form->createView(),
            'isInvalid'=>$isInvalid,
        ]);
    }

    /**
     * @Route("/su/edit-category/{id}", name="edit_category", methods={"GET", "POST"})
     */
    public function editCategory(Category $category, Request $request): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $isInvalid = null;

        if($this->saveCategory($form, $request, $category))
        {
            return $this->redirectToRoute('categories');
        }
        elseif ($request->isMethod('post'))
        {
            $isInvalid = 'is-invalid';
        }

        return $this->render('admin/edit_category.html.twig',[
            'category' => $category,
            'form'=>$form->createView(),
            'isInvalid'=>$isInvalid,
        ]);
    }

    /**
     * @Route("/su/delete-category/{id}", name="delete_category")
     */
    public function deleteCategory(Category $category): Response
    {
        $this->entityManager->remove($category);
        $this->entityManager->flush();
        return $this->redirectToRoute('categories');
    }

    /**
     * @Route("/videos", name="videos")
     */
    public function videos(): Response
    {
        return $this->render('admin/videos.html.twig');
    }

    /**
     * @Route("/su/upload-video", name="upload_video")
     */
    public function uploadVideo(): Response
    {
        return $this->render('admin/upload_video.html.twig');
    }

    /**
     * @Route("/su/users", name="users")
     */
    public function users(): Response
    {
        return $this->render('admin/users.html.twig');
    }

    public function getAllCategories(CategoryTreeAdminOptionList $categories, $editedCategory = null)
    {
//        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $categories->getCategoryList($categories->buildTree());
        return $this->render('admin/_all_categories.html.twig', [
            'categories' => $categories,
            'editedCategory' => $editedCategory
        ]);
    }

    private function saveCategory($form, $request, $category): bool
    {
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $category->setName($request->request->get('category')['name']);

            $repository = $this->entityManager->getRepository(Category::class);
            $parent = $repository->find($request->request->get('Category')['parent']);
            $category->setParent($parent);

            $this->entityManager->persist($category);
            $this->entityManager->flush();

            return true;
        }
        return false;
    }
}
