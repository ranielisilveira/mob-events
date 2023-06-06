<?php

namespace App\Repositories;

use App\Models\Events;
use Illuminate\Support\Collection;

class EventsRepository
{
    public function getAll(): Collection
    {
        return Events::all();
    }

    public function create(array $data): Events
    {
        return Events::create($data);
    }
}
