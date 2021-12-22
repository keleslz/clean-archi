<?php

namespace Keleslz\Domain\Request;

interface GetMessageRequestInterface
{
    public function getPage(): int;

    public function getLimit(): int;
}
