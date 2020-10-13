<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateContracts;
use Illuminate\Http\Request;
use App\Models\Condominium;
use App\Models\Contracts;
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

        $newContract = Contracts::create($request->all());

        return $newContract;
    }

    public function printContract()
    {
        $pdf = PDF::loadView('printables.contract');
        $pdf->setPaper('a4');

        return $pdf->stream();
    }
}
