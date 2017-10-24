<?php


namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{

    public function findAllPublishedOrderBySize()
    {

        return $this->createQueryBuilder('genus');

    }

}