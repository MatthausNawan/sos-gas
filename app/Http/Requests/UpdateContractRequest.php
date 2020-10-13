<?php

namespace App\Http\Requests;

use App\Models\Contract;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContractRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contract_edit');
    }

    public function rules()
    {
        return [
            'condominium_id'     => [
                'required',
                'integer',
            ],
            'first_name'         => [
                'string',
                'required',
            ],
            'last_name'          => [
                'string',
                'required',
            ],
            'ssn'                => [
                'string',
                'required',
            ],
            'register'           => [
                'string',
                'required',
            ],
            'birth_date'         => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'phone'              => [
                'string',
                'nullable',
            ],
            'mobile_phone'       => [
                'string',
                'nullable',
            ],
            'zipcode'            => [
                'string',
                'nullable',
            ],
            'address_1'          => [
                'string',
                'nullable',
            ],
            'address_number'     => [
                'string',
                'nullable',
            ],
            'province'           => [
                'string',
                'nullable',
            ],
            'city'               => [
                'string',
                'nullable',
            ],
            'state'              => [
                'string',
                'nullable',
            ],
            'address_complement' => [
                'string',
                'nullable',
            ],
        ];
    }
}
