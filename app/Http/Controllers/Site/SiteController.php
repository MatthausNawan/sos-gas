<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateContracts;
use Illuminate\Http\Request;
use App\Models\Condominium;
use App\Models\Contract;
use PDF;


class SiteController extends Controller
{
    public function showForm()
    {
        $condominiums = Condominium::all();

        return view('site.form', compact('condominiums'));
    }

    public function saveContract(StoreUpdateContracts $request)
    {

        $newContract = Contract::create($request->all());

        return redirect()->route('site.thank-you');
    }

    public function thankYou()
    {
        return view('site.thank-you');
    }

    public function printContract()
    {
        $pdf = PDF::loadView('printables.contract');
        $pdf->setPaper('a4');

        return $pdf->stream();
    }
}
