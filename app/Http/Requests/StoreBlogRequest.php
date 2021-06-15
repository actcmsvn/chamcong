<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreBlogRequest extends FormRequest
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
            'tag.*' => 'required|array|exists:tags,id',
        ];
    }

    public function authorize()
    {
        return Gate::allows('blog_access');
    }
}