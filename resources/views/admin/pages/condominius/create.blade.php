@extends('admin.layouts.admin')

@section('main-title', 'Novo Condominio')



@section('content')
<div class="ibox">
    <div class="ibox-content">
        <form action="{{ route('condominius.store') }}" class="form" method="post">
            @csrf
            @include('admin.pages.condominius._partials.form')
        </form>
    </div>
</div>
@stop
