<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttendanceResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'participant_id' => $this->participant_id,
            'event_date' => $this->event_date,
        ];
    }
}
