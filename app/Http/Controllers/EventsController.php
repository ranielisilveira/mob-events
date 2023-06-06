<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventsRequest;
use App\Http\Resources\EventsResource;
use App\Services\EventsService;
use Illuminate\Http\JsonResponse;

class EventsController extends Controller
{
    private $eventsService;

    public function __construct(
        EventsService $eventsService,
    ) {
        $this->eventsService = $eventsService;
    }

    public function store(CreateEventsRequest $request): JsonResponse
    {
        $data = $request->all();
        $event = $this->eventsService->create($data);

        return response()->json(
            new EventsResource($event),
        );
    }
}
