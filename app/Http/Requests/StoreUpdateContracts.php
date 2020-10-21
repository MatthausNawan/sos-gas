<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateContracts extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'condominium_id' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'mobile_phone' => 'required',
            'ssn' => 'required',
            'register' => 'required',
            'zipcode' => 'required',
            'address_1' => 'required',
            'address_number' => 'required',
            'province' => 'required',
            'city' => 'required',
            'state' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório'
        ];
    }

    public function attributes()
    {
        return [
            'first_name' => 'Nome',
            'last_name' => 'Sobrenome',
            'condominium_id' => 'Condominio',
            'mobile_phone' => 'Telefone Celular',
            'phone' => 'Telefone Residencial',
            'ssn    ' => 'CPF',
            'register' => 'Identidade',
            'zipcode' => 'Cep',
            'address_1' => 'Rua/Logradouro',
            'address_number' => 'Numero do Endereço',
            'province' => 'Bairro',
            'city' => 'Cidade',
            'state' => 'Estado',
        ];
    }
}
