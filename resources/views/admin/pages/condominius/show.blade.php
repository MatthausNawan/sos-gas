@extends('admin.layouts.admin')

@section('main-title', 'Detalhes do Condominio')



@section('content')
<div class="ibox">
    <div class="ibox-content">
        <dl class="row">
            <dt class="col-sm-2">Nome</dt>
            <dd class="col-sm-10">{{$condominium->name}}</dd>
        </dl>
        <div class="row">
            <a href="{{route('condominius.index')}}" class="btn btn-default mr-2">Voltar</a>
            <form action="{{ route('condominius.destroy',$condominium->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Remover: <strong>{{ $condominium->name }}</strong></button>
            </form>
        </div>
    </div>
</div>
@stop
