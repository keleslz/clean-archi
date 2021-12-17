<?php

namespace Keleslz\Domain\UseCase;

use Keleslz\Domain\Data\Entity\UserInterface;
use Keleslz\Domain\Data\Repository\MessageRepositoryInterface;
use Keleslz\Domain\Presenter\MessagePresenterInterface;
use Keleslz\Domain\Request\MessageRequestInterface;
use Keleslz\Domain\Response\MessageResponse;

class MessageUseCase implements MessageUseCaseInterface
{
    public function __construct(
        private MessageRepositoryInterface $messageRepository
    )
    {}

    public function execute(MessageRequestInterface $request, MessagePresenterInterface $presenter): void
    {
        $response = new MessageResponse();
        /** Ma logique à executer **/
        $user = $this->getUser($request->getUser());
        dd($user);
        /** Fin de de ma logique à executer **/

        $response->setIsSuccess();
        $presenter->present($response);
    }

    public function getUser(string $idUser) : UserInterface
    {
        return $this->messageRepository->find($idUser);
    }
    public function insertMessage(): void
    {
        $this->messageRepository;
    }
}
