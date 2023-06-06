<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventsRequest;
use App\Http\Resources\EventsCollection;
use App\Http\Resources\EventsResource;
use App\Services\EventsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class EventsController extends Controller
{
    private $eventsService;

    public function __construct(
        EventsService $eventsService,
    ) {
        $this->eventsService = $eventsService;
    }

    public function index(): JsonResponse
    {
        $events = $this->eventsService->getAll();

        return response()->json(
            EventsCollection::make($events),
            Response::HTTP_OK,
        );
    }

    public function store(CreateEventsRequest $request): JsonResponse
    {
        $data = $request->all();
        $event = $this->eventsService->create($data);

        return response()->json(
            EventsResource::make($event),
            Response::HTTP_CREATED,
        );
    }
}
