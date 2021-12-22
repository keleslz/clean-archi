<?php

namespace Keleslz\Domain\Response;

use Keleslz\Domain\Data\Entity\UserInterface;
use Keleslz\Domain\Request\MessageRequestInterface;

class CreateMessageResponse implements MessageResponseInterface
{
    private bool $isSuccess = false;
    private string $idUser = '';
    private string $content = '';

    public function setIsSuccess(): self
    {
        $this->isSuccess = true;
        return $this;
    }

    public function setIsFail(): self
    {
        $this->isSuccess = false;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->content;
    }

    public function getUser(): string
    {
        return $this->idUser;
    }

    public function setData(UserInterface $user, MessageRequestInterface $request) : void
    {
        $this->idUser = $user->getId();
        $this->content = $request->getMessage();
    }
}
