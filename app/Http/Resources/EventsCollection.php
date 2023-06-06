<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EventsCollection extends ResourceCollection
{
    public $collects = EventsResource::class;
}
