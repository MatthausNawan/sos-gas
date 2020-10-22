<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateContracts;
use Illuminate\Http\Request;
use App\Models\Condominium;
use App\Models\Contract;
use App\Notifications\SendContractLink;
use Illuminate\Support\Facades\Notification;
use PDF;
use Illuminate\Support\Str;


class SiteController extends Controller
{
    public function showForm()
    {
        $condominiums = Condominium::all();

        return view('site.form', compact('condominiums'));
    }

    public function saveContract(StoreUpdateContracts $request)
    {
        $data = $request->all();
        $data['hash'] = Str::uuid();

        $contract = Contract::create($data);

        return redirect()->route('site.thank-you', $contract->hash);
    }

    public function thankYou($hash)
    {
        $contract = Contract::whereHash($hash)->first();
        $contract_hash = $contract->hash;

        $contract->notify(new SendContractLink($contract));

        return view('site.thank-you', compact('contract_hash'));
    }

    public function printContract($hash)
    {
        $contract = Contract::whereHash($hash)->first();

        $pdf = PDF::loadView('printables.contract', compact('contract'));
        $pdf->setPaper('a4');

        return $pdf->stream();
    }
}
