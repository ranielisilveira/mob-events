<?php

namespace App\Services;

use App\Models\Participants;
use App\Repositories\ParticipantsRepository;
use Illuminate\Support\Collection;

class ParticipantsService
{
    private $participantsRepository;

    public function __construct(
        ParticipantsRepository $participantsRepository,
    ) {
        $this->participantsRepository = $participantsRepository;
    }

    public function getParticipantsEvent(int $eventId): Collection
    {
        return $this->participantsRepository->getParticipantsEvent($eventId);
    }

    public function create(array $data): Participants
    {
        $participants = $this->participantsRepository->create($data);

        $participants->events()->associate($data['event_id']);

        return $participants;
    }
}
