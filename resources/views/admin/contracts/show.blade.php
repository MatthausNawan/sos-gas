@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.contract.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.contracts.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $contract->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.condominium') }}
                                    </th>
                                    <td>
                                        {{ $contract->condominium_name ?? '' }} -
                                        {{ $contract->condominium_block ?? '' }} /
                                        {{ $contract->condominium_apto ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.first_name') }}
                                    </th>
                                    <td>
                                        {{ $contract->first_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.last_name') }}
                                    </th>
                                    <td>
                                        {{ $contract->last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.ssn') }}
                                    </th>
                                    <td>
                                        {{ $contract->ssn }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.register') }}
                                    </th>
                                    <td>
                                        {{ $contract->register }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.birth_date') }}
                                    </th>
                                    <td>
                                        {{ $contract->birth_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.phone') }}
                                    </th>
                                    <td>
                                        {{ $contract->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.mobile_phone') }}
                                    </th>
                                    <td>
                                        {{ $contract->mobile_phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $contract->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.zipcode') }}
                                    </th>
                                    <td>
                                        {{ $contract->zipcode }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.address_1') }}
                                    </th>
                                    <td>
                                        {{ $contract->address_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.address_number') }}
                                    </th>
                                    <td>
                                        {{ $contract->address_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.province') }}
                                    </th>
                                    <td>
                                        {{ $contract->province }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.city') }}
                                    </th>
                                    <td>
                                        {{ $contract->city }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.state') }}
                                    </th>
                                    <td>
                                        {{ $contract->state }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.address_complement') }}
                                    </th>
                                    <td>
                                        {{ $contract->address_complement }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.contracts.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
