<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contracts;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    public function index()
    {
        $contracts = Contracts::latest()->paginate(10);

        return view('admin.pages.contracts.index', compact('contracts'));
    }
}
