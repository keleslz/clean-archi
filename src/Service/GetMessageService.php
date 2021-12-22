<?php

namespace App\Service;

use App\Entity\Message;
use Keleslz\Domain\Data\Entity\UserInterface as UserInterfaceAlias;
use Keleslz\Domain\Data\Repository\MessageRepositoryInterface;
use Keleslz\Domain\Request\GetMessageRequestInterface;

class GetMessageService extends AbstractGetEntityService implements  MessageRepositoryInterface
{
    /**
     * @return UserInterfaceAlias[]
     */
    public function findBy(GetMessageRequestInterface $messageRequest): array
    {
        return $this->em->getRepository(Message::class)->findBy(['user' => $messageRequest->getUser()]);
    }
}
