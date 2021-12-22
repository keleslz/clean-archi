<?php

namespace Keleslz\Domain\Response;

use Keleslz\Domain\Data\Entity\UserInterface;
use Keleslz\Domain\Request\MessageRequestInterface;

class GetMessageResponse implements MessageResponseInterface
{
    private string $idUser = '';
    private array $messages = [];

    public function getUser(): string
    {
        return $this->idUser;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setData(string $user, array $items) : void
    {
        $this->idUser = $user;
        $this->messages = $items;
    }
}
