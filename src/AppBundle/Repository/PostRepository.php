<?php

namespace AppBundle\Repository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    public function search( $word )
    {
        $query = $this->createQueryBuilder('e')
            ->where(' e.title LIKE :word or e.content LIKE :word')
            ->setParameter('word', '%'.$word.'%')
            ;
        return $query->getQuery()->getResult();
    }
}
