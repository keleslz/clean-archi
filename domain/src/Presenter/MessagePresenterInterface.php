<?php

namespace Keleslz\Domain\Presenter;

use Keleslz\Domain\Response\MessageResponseInterface;

interface MessagePresenterInterface
{
    public function present(MessageResponseInterface $messageResponseInterface) : void;

    public function getResponse() : MessageResponseInterface;
}
