<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCondominiumRequest;
use App\Http\Requests\StoreCondominiumRequest;
use App\Http\Requests\UpdateCondominiumRequest;
use App\Models\Condominium;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CondominiumController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('condominium_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $condominia = Condominium::all();

        return view('admin.condominia.index', compact('condominia'));
    }

    public function create()
    {
        abort_if(Gate::denies('condominium_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.condominia.create');
    }

    public function store(StoreCondominiumRequest $request)
    {
        $condominium = Condominium::create($request->all());

        return redirect()->route('admin.condominia.index');
    }

    public function edit(Condominium $condominium)
    {
        abort_if(Gate::denies('condominium_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.condominia.edit', compact('condominium'));
    }

    public function update(UpdateCondominiumRequest $request, Condominium $condominium)
    {
        $condominium->update($request->all());

        return redirect()->route('admin.condominia.index');
    }

    public function show(Condominium $condominium)
    {
        abort_if(Gate::denies('condominium_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.condominia.show', compact('condominium'));
    }

    public function destroy(Condominium $condominium)
    {
        abort_if(Gate::denies('condominium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $condominium->delete();

        return back();
    }

    public function massDestroy(MassDestroyCondominiumRequest $request)
    {
        Condominium::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
