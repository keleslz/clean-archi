<?php

namespace Keleslz\Domain\Data\Repository;

use Keleslz\Domain\Data\Entity\UserInterface;

Interface UserRepositoryInterface
{
    public function find(string $id) : ?UserInterface;
}
