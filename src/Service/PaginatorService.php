<?php

namespace App\Service;

use JetBrains\PhpStorm\ArrayShape;
use Keleslz\Domain\Request\GetMessageRequestInterface;
use Knp\Component\Pager\PaginatorInterface;
use Keleslz\Domain\Service\Paginator\PaginatorInterface as DomainPaginatorInterface;

class PaginatorService implements DomainPaginatorInterface
{
    public function __construct(
        private PaginatorInterface $paginator
    )
    {}

    #[ArrayShape(['maxResults' => 'int', 'items' => "mixed"])]
    public function paginate(array $data, GetMessageRequestInterface $getMessageRequest) : array
    {
        $res = $this->paginator->paginate($data, $getMessageRequest->getPage() , $getMessageRequest->getLimit() );

        return [
            'maxResults' => $res->getTotalItemCount(),
            'items' => $res->getItems()
        ];
    }
}
