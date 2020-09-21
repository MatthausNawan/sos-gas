@extends('admin.layouts.admin')

@section('main-title', "Editar Condominio {$condominium->name}")



@section('content')
<div class="ibox">
    <div class="ibox-content">
        <form action="{{ route('condominius.update',$condominium->id) }}" class="form" method="post">
            @csrf
            @method('PUT')
            @include('admin.pages.condominius._partials.form')
        </form>
    </div>
</div>
@stop
