<?php

namespace App\Http\Requests;

use App\Models\Condominium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCondominiumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('condominium_edit');
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
