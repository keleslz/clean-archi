<?php

namespace Keleslz\Domain\Request;

use Keleslz\Domain\Request\AbstractRequest;


class GetMessageRequest extends AbstractRequest implements MessageRequestInterface, GetMessageRequestInterface
{
    private ?string $user;

    private ?int $page;

    private ?int $limit;

    public function __construct(
        protected array $data
    )
    {
        $this->user = $this->getKey('user');
        $this->page = (int) $this->getKey('page');
        $this->limit = (int) $this->getKey('limit');
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
