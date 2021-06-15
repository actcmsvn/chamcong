<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateProgramRequest extends FormRequest
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
            'contents' => [
                'required', 'string',
            ],
            'is_featured' => [
                'required', 'boolean',
            ],
            'is_published' => [
                'required', 'boolean',
            ],            
        ];
    }

    public function authorize()
    {
        return Gate::allows('program_access');
    }
}