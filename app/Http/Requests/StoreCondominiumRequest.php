<?php

namespace App\Http\Requests;

use App\Models\Condominium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCondominiumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('condominium_create');
    }

    public function rules()
    {
        return [
            'name'      => [
                'string',
                'min:3',
                'required',
            ],
            'is_active' => [
                'required',
            ],
        ];
    }
}
