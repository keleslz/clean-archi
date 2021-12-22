<?php

namespace Keleslz\Domain\Exception;

use Keleslz\Domain\Adapter\Paginator\PaginatorInterface;

class BadPaginatorInterfaceImplementationTypeException extends \Exception
{
    public function __construct(string $className)
    {
        $message = sprintf('%s class must be implements %s', $className, PaginatorInterface::class);
        parent::__construct($message, 1);
    }
}
