<?php

namespace App\Repository;

use App\Entity\Video;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @extends ServiceEntityRepository<Video>
 *
 * @method Video|null find($id, $lockMode = null, $lockVersion = null)
 * @method Video|null findOneBy(array $criteria, array $orderBy = null)
 * @method Video[]    findAll()
 * @method Video[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideoRepository extends ServiceEntityRepository
{
    private ManagerRegistry $registry;
    private PaginatorInterface $paginator;

    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Video::class);
        $this->registry = $registry;
        $this->paginator = $paginator;
    }

    public function add(Video $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Video $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByChildIds(array $value, int $page, ?string $sort_method)
    {
        $sort_method = $sort_method != 'rating' ? $sort_method : 'ASC';
        $dbquery = $this->createQueryBuilder('v')
            ->andWhere('v.category IN (:val)')
            ->setParameter('val', $value)
            ->orderBy('v.title', $sort_method)
            ->getQuery();

        return $this->paginator->paginate($dbquery, $page, 5);
    }

    public function findByTitle(string $query, int $page, ?string $sort_method)
    {
        $sort_method = $sort_method != 'rating' ? $sort_method : 'ASC';

        $querybuilder = $this->createQueryBuilder('v');
        $searchTerms = $this->prepareQuery($query);

        foreach ($searchTerms as $key => $term)
        {
            $querybuilder
                ->orWhere('v.title LIKE :t_' .$key)
                ->setParameter('t_'.$key, '%'.trim($term). '%');
        }

        $dbquery = $querybuilder
            ->orderBy('v.title', $sort_method)
            ->getQuery();

        return $this->paginator->paginate($dbquery, $page, 5);
    }

    private function prepareQuery(string $query): array
    {
        return explode(' ',$query);
    }

    public function videoDetails($id)
    {
        return $this->createQueryBuilder('v')
            ->leftJoin('v.comments', 'c')
            ->leftJoin('c.author', 'u')
            ->addSelect('c', 'u')
            ->where('v.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
