<?php

namespace App\Repositories;

use App\Models\Participants;
use Illuminate\Support\Collection;

class ParticipantsRepository
{
    public function create(array $data): Participants
    {
        return Participants::create($data);
    }

    public function getAll(): Collection
    {
        return Participants::all();
    }
}
