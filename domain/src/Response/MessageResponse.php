<?php

namespace Keleslz\Domain\Response;

class MessageResponse implements MessageResponseInterface
{
    private bool $isSuccess = false;

    public function getMessage(): string
    {
        return $this->isSuccess;
    }

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
}
