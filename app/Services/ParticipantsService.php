<?php

namespace App\Services;

use App\Models\Participants;
use App\Repositories\ParticipantsRepository;

class ParticipantsService
{
    private $participantsRepository;

    public function __construct(
        ParticipantsRepository $participantsRepository,
    ) {
        $this->participantsRepository = $participantsRepository;
    }

    public function create(array $data): Participants
    {
        $participants = $this->participantsRepository->create($data);

        $participants->events()->associate($data['event_id']);

        return $participants;
    }
}
