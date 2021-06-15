<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreProgramgRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => [
                'required', 'string',
            ],
            'slug' => [
                'required', 'string',
            ],
            'description' => [
                'required', 'string',
            ],
        ];
    }

    public function authorize()
    {
        return Gate::allows('program_access');
    }
}