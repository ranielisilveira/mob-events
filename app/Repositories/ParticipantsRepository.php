<?php

namespace App\Repositories;

use App\Models\Participants;
use Illuminate\Support\Collection;

class ParticipantsRepository
{
    public function getParticipantsEvent(int $eventId): Collection
    {
        return Participants::where('event_id', $eventId)->get();
    }

    public function create(array $data): Participants
    {
        return Participants::create($data);
    }

    public function getAll(): Collection
    {
        return Participants::all();
    }
}
