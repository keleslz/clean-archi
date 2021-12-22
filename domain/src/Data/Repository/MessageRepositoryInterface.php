<?php

namespace Keleslz\Domain\Data\Repository;

use Keleslz\Domain\Request\GetMessageRequestInterface;

interface MessageRepositoryInterface
{
    public function findBy(GetMessageRequestInterface $messageRequest) : array;
}
