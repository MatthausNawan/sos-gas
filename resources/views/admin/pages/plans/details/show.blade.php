@extends('adminlte::page')

@section('title',"Visualizar Detalhes do plano {$plan->name}")

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ver Detalhe do Plano <strong>{{$plan->name}}</strong></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
                <li class="breadcrumb-item"><a href="{{ route('plans.show',$plan->url) }}">{{$plan->name}}</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('plans.details.index',$plan->url) }}">Detalhes</a></li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
           <dl class="row">
               <dt class="col-sm-2">Name:</dt>
               <dl class="col-sm-10">{{$detail->name}}</dl>
           </dl>
        </div>
        <div class="card-footer">
            <div class="row">
                <a href="{{route('plans.details.index',$plan->url)}}" class="btn btn-default mr-2">Voltar</a>
                <form action="{{ route('plans.details.destroy',[$plan->url,$detail->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Remover o plano detalhe {{ $detail->name }} do Plano {{$plan->name}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
