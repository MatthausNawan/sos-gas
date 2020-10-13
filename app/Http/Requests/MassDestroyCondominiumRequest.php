<?php

namespace App\Http\Requests;

use App\Models\Condominium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCondominiumRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('condominium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:condominia,id',
        ];
    }
}
