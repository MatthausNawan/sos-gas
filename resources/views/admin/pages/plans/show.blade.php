@extends('adminlte::page')

@section('title', 'Detalhes do Plano')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Visualizar Plano <strong>{{$plan->name}}</strong></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('plans.show',$plan->url) }}">Visualizar Plano</a></li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-2">Nome</dt>
                <dd class="col-sm-10">{{$plan->name}}</dd>
                <dt class="col-sm-2">Url</dt>
                <dd class="col-sm-10">{{$plan->url}}</dd>
                <dt class="col-sm-2">Valor</dt>
                <dd class="col-sm-10">{{ number_format($plan->price,2,'.',',') }}</dd>
                <dt class="col-sm-2">Descrição</dt>
                <dd class="col-sm-10">{{$plan->description}}</dd>
            </dl>
        </div>
        <div class="card-footer">
            <div class="row">
                <a href="{{route('plans.index')}}" class="btn btn-default mr-2">Voltar</a>
                <form action="{{ route('plans.destroy',$plan->url) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Remover: <strong>{{ $plan->name }}</strong></button>
                </form>
            </div>
        </div>
    </div>
@stop
