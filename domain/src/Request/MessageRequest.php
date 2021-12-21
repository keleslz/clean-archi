<?php

namespace Keleslz\Domain\Request;

use Keleslz\Domain\Request\AbstractRequest;


class MessageRequest extends AbstractRequest implements MessageRequestInterface
{
    private ?string $user;

    private ?string $message;

    public function __construct(
        protected array $data
    )
    {
        $this->user = $this->getKey('user');
        $this->message = $this->getKey('message');
    }

    private function getKey(string $key) : string
    {
        return $this->data[$key] ?? '';
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
