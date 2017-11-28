<?php
/**
 * Created by PhpStorm.
 * User: Sale
 * Date: 11/28/2017
 * Time: 1:58 AM
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    public function findAllPublishedOrderedBySize()
    {
        /**
         * @return Genus[]
         */
        return $this->createQueryBuilder('genus')
            ->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
            ->orderBy('genus.speciesCount', 'DESC')
            ->getQuery()
            ->execute();
    }
}