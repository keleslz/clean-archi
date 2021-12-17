<?php

namespace Keleslz\Domain\Request;

class AbstractRequest
{
    private function getKey(string $key) : ?string
    {
        return $this->data[$key] ?? null;
    }
}
