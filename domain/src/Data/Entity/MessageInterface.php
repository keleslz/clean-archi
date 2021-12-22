<?php

namespace Keleslz\Domain\Data\Entity;
use Keleslz\Domain\Data\Entity\UserInterface;

Interface MessageInterface
{
    public function getId(): ?int;

    public function getContent(): ?string;

    public function getUser(): ?UserInterface;
}
