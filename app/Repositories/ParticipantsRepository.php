<?php

namespace App\Repositories;

use App\Models\Participants;

class ParticipantsRepository
{
    public function create(array $data): Participants
    {
        return Participants::create($data);
    }
}
