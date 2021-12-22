<?php

namespace Keleslz\Domain\Data\Entity;

class User
{
    private int $id;

    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
