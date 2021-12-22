<?php

namespace Keleslz\Domain\Request;

class AbstractRequest
{
    protected function getKey(string $key) : ?string
    {
        return $this->data[$key] ?? null;
    }
}
