<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateParcitipantsRequest;
use App\Http\Resources\ParticipantsResource;
use App\Services\ParticipantsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParticipantsController extends Controller
{
    private $participantsService;

    public function __construct(
        ParticipantsService $participantsService,
    ) {
        $this->participantsService = $participantsService;
    }

    public function index(Request $request): JsonResponse
    {
        $eventId = $request->get('event_id');
        $participants = $this->participantsService->getParticipantsEvent($eventId);

        return response()->json(
            ParticipantsResource::collection($participants),
            Response::HTTP_OK,
        );
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
