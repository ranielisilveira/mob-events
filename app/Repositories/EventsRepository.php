<?php

namespace App\Repositories;

use App\Models\Events;

class EventsRepository
{
    public function create(array $data): Events
    {
        return Events::create($data);
    }
}
