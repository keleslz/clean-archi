<?php

namespace Keleslz\Domain\Service\Paginator;

use Keleslz\Domain\Request\GetMessageRequestInterface;

interface PaginatorInterface
{
    public function paginate(array $data, GetMessageRequestInterface $getMessageRequest) : array;
}
