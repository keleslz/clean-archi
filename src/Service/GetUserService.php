<?php

namespace App\Service;

use App\Entity\User;
use Keleslz\Domain\Data\Entity\UserInterface;
use Keleslz\Domain\Data\Repository\UserRepositoryInterface;

class GetUserService extends AbstractGetEntityService implements UserRepositoryInterface
{
    public function find(string $id): ?UserInterface
    {
        return $this->em->getRepository(User::class)->find($id);
    }
}
