<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

abstract class AbstractGetEntityService
{
    public function __construct(
        protected EntityManagerInterface $em
    )
    {}
}
