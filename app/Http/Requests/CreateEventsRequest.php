<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'start_event' => ['required', 'date'],
            'end_event' => ['required', 'date', 'after_or_equal:start_event'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'start_event.required' => 'Start event is required',
            'end_event.required' => 'End event is required',
            'end_event.after_or_equal' => 'End date must be after or equal start event',
        ];
    }
}
