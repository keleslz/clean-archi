<?php

namespace App\Controller;

use Keleslz\Domain\ClientInterface;
use Keleslz\Domain\Presenter\MessagePresenter;
use Keleslz\Domain\Request\CreateMessageRequest;
use Keleslz\Domain\Request\GetMessageRequest;
use Keleslz\Domain\UseCase\CreateMessageUseCase;
use Keleslz\Domain\UseCase\GetMessageUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MessageController extends AbstractController
{
    public function create(
        CreateMessageUseCase $messageUseCase,
        MessagePresenter     $presenter,
        Request              $request
    ) : JsonResponse
    {
        /**
         * Devra être géré par un POST barrage qui recrache les bonnes $Data dans un tableau ou directement mon XRequest
         * @var array
         */
        $data = json_decode($request->getContent(), true);

        $messageRequest = new CreateMessageRequest($data);
        $messageUseCase->execute($messageRequest, $presenter);

        return $this->json($presenter->getResponse());
    }

    /**
     * @throws \Keleslz\Domain\Exception\BadPaginatorInterfaceImplementationTypeException
     */
    public function getAll(
        GetMessageUseCase $messageUseCase,
        MessagePresenter $presenter,
        Request $request
    ) : JsonResponse
    {
        /**
         * Devra être géré par un GET barrage qui recrache les bonnes $Data dans un tableau ou directement mon XRequest
         * @var array
         */
        $query = $request->query->all();

        $messageRequest = new GetMessageRequest($query);
        $messageUseCase->execute($messageRequest, $presenter);

        return $this->json($presenter->getResponse());
    }

}
