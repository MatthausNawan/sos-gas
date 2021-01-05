<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Util;
use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Notifications\SendContractLink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ContractAppController extends Controller
{
    public function create(Request $request)
    {

        $ssn = Util::sanitizeString($request->ssn);

        $hasContract = Contract::where('ssn', $ssn)->first();

        if ($hasContract) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Já existe um contrato com esse CPF'
            ]);
        }

        $data = $request->all();

        $data['birth_date']  = Util::parseDate($request->birth_date)->format('Y-m-d');
        $data['hash'] = Str::uuid();
        $data['condominium_id'] = null;
        $data['ssn'] = Util::sanitizeString($request->ssn);
        $data['phone'] = Util::sanitizeString($request->phone);
        $data['mobile_phone'] = Util::sanitizeString($request->mobile_phone);

        $contract = Contract::create($data);


        if ($contract) {

            $contract->notify(new SendContractLink($contract));

            return response()->json([
                'success' => true,
                'data' => $contract,
                'message' => "Pré Contrato Realizado",
                'url' => route('contract.print', $contract->hash)
            ]);
        }
        return response()->json([
            'success' => false,
            'data' => null,
            'message' => 'Ocorre um erro, Falar com Suporte'
        ]);
    }

    public function show($cpf)
    {
        $ssn = Util::sanitizeString($cpf);

        $hasContract = Contract::where('ssn', $ssn)->first();

        if ($hasContract) {
            return response()->json([
                'success' => true,
                'data' => $hasContract,
                'message' => null
            ]);
        } else {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => "Nenhum Contrato Localizado com esse CPF."
            ]);
        }
    }
}
