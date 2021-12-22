<?php

namespace Keleslz\Domain\Factory;

use Keleslz\Domain\Data\Entity\Message;
use Keleslz\Domain\Data\Entity\MessageInterface;
use Keleslz\Domain\Data\Entity\User;
use Keleslz\Domain\Data\Entity\UserInterface;

class EntityFactory
{
    public static function createMessage(MessageInterface $message) : Message
    {
        return (new Message())->setContent($message->getContent())
            ->setId($message->getId())
            ->setUser(self::createUser($message->getUser())->getId())
        ;
    }

    public static function createUser(UserInterface $user) : User
    {
        return (new User())->setId($user->getId());
    }
}
