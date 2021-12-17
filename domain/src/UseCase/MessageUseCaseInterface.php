<?php

namespace Keleslz\Domain\UseCase;

use Keleslz\Domain\Presenter\MessagePresenterInterface;
use Keleslz\Domain\Request\MessageRequestInterface;

interface MessageUseCaseInterface
{
    public function execute(MessageRequestInterface $request, MessagePresenterInterface $presenter) : void;
}
