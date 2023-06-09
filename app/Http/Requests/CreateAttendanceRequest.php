<?php

namespace App\Http\Requests;

use App\Models\Events;
use Illuminate\Foundation\Http\FormRequest;

class CreateAttendanceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'participant_id' => ['required', 'integer', 'exists:participants,id'],
            'event_date' => ['required', 'date'],
        ];
    }


    public function messages()
    {
        return [
            'participant_id.required' => 'Participant id is required',
            'participant_id.integer' => 'Participant id must be integer',
            'participant_id.exists' => 'Participant id must be exists',
            'event_date.required' => 'Event date is required',
            'event_date.date' => 'Event date must be date',
        ];
    }
}
