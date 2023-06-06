<?php

namespace App\Services;

use App\Models\Events;
use App\Repositories\EventsRepository;
use Illuminate\Support\Collection;

class EventsService
{
    private $eventsRepository;

    public function __construct(
        EventsRepository $eventsRepository,
    ) {
        $this->eventsRepository = $eventsRepository;
    }

    public function getAll(): Collection
    {
        return $this->eventsRepository->getAll();
    }

    public function create(array $data): Events
    {
        return $this->eventsRepository->create($data);
    }
}
