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
            'document' => 'required',
            'register' => 'required',
            'zipcode' => 'required',
            'address' => 'required',
            'address_number' => 'required',
            'neighborhood' => 'required',
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
            'document' => 'CPF',
            'register' => 'Identidade',
            'zipcode' => 'Cep',
            'address' => 'Rua/Logradouro',
            'address_number' => 'Numero do Endereço',
            'neighborhood' => 'Bairro',
            'city' => 'Cidade',
            'state' => 'Estado',
        ];
    }
}
