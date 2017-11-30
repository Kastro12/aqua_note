<?php
/**
 * Created by PhpStorm.
 * User: Sale
 * Date: 11/30/2017
 * Time: 2:48 PM
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;


class SubFamilyRepository extends EntityRepository
{

    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('sub_family')
            ->orderBy('sub_family.name', 'ASC');
    }
}