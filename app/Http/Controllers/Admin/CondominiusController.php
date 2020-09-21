<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Condominium;

class CondominiusController extends Controller
{

    public function index()
    {
        $condominius = Condominium::latest()->paginate(10);

        return view('admin.pages.condominius.index', [
            'condominius' => $condominius
        ]);
    }

    public function create()
    {
        return view('admin.pages.condominius.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Condominium::create($data);

        return redirect()->route('condominius.index');
    }

    public function show($id)
    {
        $condominium = Condominium::find($id);

        if (!$condominium)
            return redirect()->back();

        return view('admin.pages.condominius.show', [
            'condominium' => $condominium
        ]);
    }

    public function edit($id)
    {
        $condominium = Condominium::find($id);

        if (!$condominium)
            return redirect()->back();

        return view('admin.pages.condominius.edit', [
            'condominium' => $condominium
        ]);
    }

    public function destroy($id)
    {
        $condominium = Condominium::find($id);

        if (!$condominium)
            return redirect()->back();

        $condominium->delete();

        return redirect()->route('condominius.index');
    }

    public function search(Request $request)
    {

        $filters = $request->except('_token');

        $condominius = Condominium::search($request->filter);

        return view('admin.pages.condominius.index', [
            'condominius' => $condominius,
            'filters' => $filters
        ]);
    }

    public function update(Request $request, $id)
    {

        $condominium = Condominium::find($id);
        if (!$condominium)
            return redirect()->back();

        $condominium->update($request->all());

        return redirect()->route('condominius.index');
    }
}
