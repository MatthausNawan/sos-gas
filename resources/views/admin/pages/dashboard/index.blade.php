@extends('admin.layouts.admin')

@section('main-title',"Dashboard")

@section('content')

<div class="row">
    <div class="col-12">
        <div class="ibox">
            <div class="ibox-content">
                <h2>Bem vindo(a), <b>{{ Auth::user()->name ?? ' Developer'}}</b></h2>
            </div>
        </div>
    </div>
</div>
@endsection
