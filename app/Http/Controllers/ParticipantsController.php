<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateParcitipantsRequest;
use App\Http\Resources\ParticipantsResource;
use App\Services\ParticipantsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ParticipantsController extends Controller
{
    private $participantsService;

    public function __construct(
        ParticipantsService $participantsService,
    ) {
        $this->participantsService = $participantsService;
    }

    public function store(CreateParcitipantsRequest $request): JsonResponse
    {
        $data = $request->all();
        $event = $this->participantsService->create($data);

        return response()->json(
            ParticipantsResource::make($event),
            Response::HTTP_CREATED,
        );
    }
}
