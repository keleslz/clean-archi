<?php

namespace Keleslz\Domain\UseCase;

use App\Entity\Message;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Keleslz\Domain\Data\Entity\UserInterface;
use Keleslz\Domain\Presenter\MessagePresenterInterface;
use Keleslz\Domain\Request\MessageRequestInterface;
use Keleslz\Domain\Response\MessageResponse;

class MessageUseCase implements MessageUseCaseInterface
{
    public function __construct(
        private EntityManagerInterface $em
    )
    {}

    public function execute(MessageRequestInterface $request, MessagePresenterInterface $presenter): void
    {
        $response = new MessageResponse();

        /** Ma logique à executer **/
        $user = $this->insertMessage($request);
        /** Fin de de ma logique à executer **/


        $response->setData($user, $request);
        $response->setIsSuccess();

        $presenter->present($response);
    }

    public function insertMessage(MessageRequestInterface $request): UserInterface
    {
        $userInitiator = $request->getUser();
        $messageContent = $request->getMessage();

        $user = $this->em->getRepository(User::class)->find($userInitiator) ?? new User();

        $message = (new Message())->setUser($user)
            ->setContent($messageContent)
        ;

        $this->em->persist($user);
        $this->em->persist($message);

        $this->em->flush();

        return $this->em->getRepository(User::class)->find($userInitiator);
    }
}
