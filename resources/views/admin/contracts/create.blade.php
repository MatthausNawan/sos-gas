@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.contract.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.contracts.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('condominium') ? 'has-error' : '' }}">
                            <label class="required" for="condominium_id">{{ trans('cruds.contract.fields.condominium') }}</label>
                            <select class="form-control select2" name="condominium_id" id="condominium_id" required>
                                @foreach($condominia as $id => $condominium)
                                    <option value="{{ $id }}" {{ old('condominium_id') == $id ? 'selected' : '' }}>{{ $condominium }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('condominium'))
                                <span class="help-block" role="alert">{{ $errors->first('condominium') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.condominium_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label class="required" for="first_name">{{ trans('cruds.contract.fields.first_name') }}</label>
                            <input class="form-control" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}" required>
                            @if($errors->has('first_name'))
                                <span class="help-block" role="alert">{{ $errors->first('first_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.first_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                            <label class="required" for="last_name">{{ trans('cruds.contract.fields.last_name') }}</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}" required>
                            @if($errors->has('last_name'))
                                <span class="help-block" role="alert">{{ $errors->first('last_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.last_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('ssn') ? 'has-error' : '' }}">
                            <label class="required" for="ssn">{{ trans('cruds.contract.fields.ssn') }}</label>
                            <input class="form-control" type="text" name="ssn" id="ssn" value="{{ old('ssn', '') }}" required>
                            @if($errors->has('ssn'))
                                <span class="help-block" role="alert">{{ $errors->first('ssn') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.ssn_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('register') ? 'has-error' : '' }}">
                            <label class="required" for="register">{{ trans('cruds.contract.fields.register') }}</label>
                            <input class="form-control" type="text" name="register" id="register" value="{{ old('register', '') }}" required>
                            @if($errors->has('register'))
                                <span class="help-block" role="alert">{{ $errors->first('register') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.register_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('birth_date') ? 'has-error' : '' }}">
                            <label for="birth_date">{{ trans('cruds.contract.fields.birth_date') }}</label>
                            <input class="form-control date" type="text" name="birth_date" id="birth_date" value="{{ old('birth_date') }}">
                            @if($errors->has('birth_date'))
                                <span class="help-block" role="alert">{{ $errors->first('birth_date') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.birth_date_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="phone">{{ trans('cruds.contract.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                            @if($errors->has('phone'))
                                <span class="help-block" role="alert">{{ $errors->first('phone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('mobile_phone') ? 'has-error' : '' }}">
                            <label for="mobile_phone">{{ trans('cruds.contract.fields.mobile_phone') }}</label>
                            <input class="form-control" type="text" name="mobile_phone" id="mobile_phone" value="{{ old('mobile_phone', '') }}">
                            @if($errors->has('mobile_phone'))
                                <span class="help-block" role="alert">{{ $errors->first('mobile_phone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.mobile_phone_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">{{ trans('cruds.contract.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('zipcode') ? 'has-error' : '' }}">
                            <label for="zipcode">{{ trans('cruds.contract.fields.zipcode') }}</label>
                            <input class="form-control" type="text" name="zipcode" id="zipcode" value="{{ old('zipcode', '') }}">
                            @if($errors->has('zipcode'))
                                <span class="help-block" role="alert">{{ $errors->first('zipcode') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.zipcode_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('address_1') ? 'has-error' : '' }}">
                            <label for="address_1">{{ trans('cruds.contract.fields.address_1') }}</label>
                            <input class="form-control" type="text" name="address_1" id="address_1" value="{{ old('address_1', '') }}">
                            @if($errors->has('address_1'))
                                <span class="help-block" role="alert">{{ $errors->first('address_1') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.address_1_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('address_number') ? 'has-error' : '' }}">
                            <label for="address_number">{{ trans('cruds.contract.fields.address_number') }}</label>
                            <input class="form-control" type="text" name="address_number" id="address_number" value="{{ old('address_number', '') }}">
                            @if($errors->has('address_number'))
                                <span class="help-block" role="alert">{{ $errors->first('address_number') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.address_number_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('province') ? 'has-error' : '' }}">
                            <label for="province">{{ trans('cruds.contract.fields.province') }}</label>
                            <input class="form-control" type="text" name="province" id="province" value="{{ old('province', '') }}">
                            @if($errors->has('province'))
                                <span class="help-block" role="alert">{{ $errors->first('province') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.province_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                            <label for="city">{{ trans('cruds.contract.fields.city') }}</label>
                            <input class="form-control" type="text" name="city" id="city" value="{{ old('city', '') }}">
                            @if($errors->has('city'))
                                <span class="help-block" role="alert">{{ $errors->first('city') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.city_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                            <label for="state">{{ trans('cruds.contract.fields.state') }}</label>
                            <input class="form-control" type="text" name="state" id="state" value="{{ old('state', '') }}">
                            @if($errors->has('state'))
                                <span class="help-block" role="alert">{{ $errors->first('state') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.state_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('address_complement') ? 'has-error' : '' }}">
                            <label for="address_complement">{{ trans('cruds.contract.fields.address_complement') }}</label>
                            <input class="form-control" type="text" name="address_complement" id="address_complement" value="{{ old('address_complement', '') }}">
                            @if($errors->has('address_complement'))
                                <span class="help-block" role="alert">{{ $errors->first('address_complement') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.address_complement_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection