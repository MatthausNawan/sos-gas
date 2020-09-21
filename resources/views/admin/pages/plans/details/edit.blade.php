@extends('adminlte::page')

@section('title',"Editar Detalhes ao plano {$plan->name}")

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Editar Detalhe do Planos <strong>{{$plan->name}}</strong></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
                <li class="breadcrumb-item"><a href="{{ route('plans.show',$plan->url) }}">{{$plan->name}}</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('plans.details.index',$plan->url) }}">Details</a></li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('plans.details.update',[$plan->url,$detail->id]) }}" method="post">
                @method('put')
                @include('admin.pages.plans.details._partials.form')
            </form>
        </div>
    </div>
@endsection
