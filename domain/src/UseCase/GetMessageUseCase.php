<?php

namespace Keleslz\Domain\UseCase;

use Doctrine\ORM\EntityManagerInterface;
use Keleslz\Domain\Service\Paginator\PaginatorInterface;
use Keleslz\Domain\Data\Repository\MessageRepositoryInterface;
use Keleslz\Domain\Data\Repository\UserRepositoryInterface;
use Keleslz\Domain\Factory\EntityFactory;
use Keleslz\Domain\Presenter\MessagePresenterInterface;
use Keleslz\Domain\Request\MessageRequestInterface;
use Keleslz\Domain\Response\GetMessageResponse;

class GetMessageUseCase implements MessageUseCaseInterface
{
    public function __construct(
        private EntityManagerInterface $em,
        private MessageRepositoryInterface $messageRepository,
        private UserRepositoryInterface $userRepository,
        private PaginatorInterface $paginatorInterface
    )
    {}

    public function execute(MessageRequestInterface $request, MessagePresenterInterface $presenter): void
    {
        $response = new GetMessageResponse();

        $user = $this->userRepository->find($request->getUser());
        $data = $this->formatMessages($this->messageRepository->findBy($request));

        $messages = $this->paginatorInterface->paginate($data, $request);

        $response->setData($user->getId(), $messages);
        $presenter->present($response);
    }

    private function formatMessages(array $data) : array
    {
        return array_map(static fn ($message) => EntityFactory::createMessage($message), $data);
    }
}
