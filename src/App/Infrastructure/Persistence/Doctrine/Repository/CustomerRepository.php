<?php

namespace App\Infrastructure\Persistence\Doctrine\Repository;

use App\Domain\Persistence\RepositoryInterface;
use Doctrine\ORM\EntityRepository;

class CustomerRepository extends EntityRepository implements RepositoryInterface
{
    public function create($entity)
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
        return $entity;
    }

    public function update($entity)
    {
    }

    public function remove($entity)
    {
    }

    public function find($id)
    {
    }

    public function findall()
    {
    }
}



