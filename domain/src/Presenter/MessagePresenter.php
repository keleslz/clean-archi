<?php

namespace Keleslz\Domain\Presenter;

use Keleslz\Domain\Response\MessageResponseInterface;

class MessagePresenter implements MessagePresenterInterface
{
    private MessageResponseInterface $messageResponseInterface;

    public function present(MessageResponseInterface $messageResponseInterface) : void
    {
        $this->messageResponseInterface = $messageResponseInterface;
    }

    public function getResponse() : MessageResponseInterface
    {
        return $this->messageResponseInterface;
    }
}
