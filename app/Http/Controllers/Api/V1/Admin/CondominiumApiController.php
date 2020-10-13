<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCondominiumRequest;
use App\Http\Requests\UpdateCondominiumRequest;
use App\Http\Resources\Admin\CondominiumResource;
use App\Models\Condominium;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CondominiumApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('condominium_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CondominiumResource(Condominium::all());
    }

    public function store(StoreCondominiumRequest $request)
    {
        $condominium = Condominium::create($request->all());

        return (new CondominiumResource($condominium))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Condominium $condominium)
    {
        abort_if(Gate::denies('condominium_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CondominiumResource($condominium);
    }

    public function update(UpdateCondominiumRequest $request, Condominium $condominium)
    {
        $condominium->update($request->all());

        return (new CondominiumResource($condominium))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Condominium $condominium)
    {
        abort_if(Gate::denies('condominium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $condominium->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
