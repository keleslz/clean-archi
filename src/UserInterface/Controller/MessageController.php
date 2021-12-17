<?php

namespace App\UserInterface\Controller;

use Keleslz\Domain\Presenter\MessagePresenter;
use Keleslz\Domain\Request\MessageRequest;
use Keleslz\Domain\UseCase\MessageUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MessageController extends AbstractController
{
    public function create(
        MessageUseCase $messageUseCase,
        MessagePresenter $presenter,
        Request $request
    ) : JsonResponse
    {
        /**
         * Devra être géré par un barrage qui recrache les bonnes $Data dans un tableau ou directement mon XRequest
         * @var array
         */
        $data = json_decode($request->getContent(), true);

        $messageRequest = new MessageRequest($data);
        $messageUseCase->execute($messageRequest, $presenter);

        return $this->json($presenter->getResponse());
    }
}
