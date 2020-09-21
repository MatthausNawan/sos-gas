@extends('adminlte::page')

@section('title', "Perfis do Plano {$plan->name}")

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Perfis do Plano: <strong>{{$plan->name}}</strong></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('plans.profiles',$plan->id) }}">P</a></li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <a href="{{ route('plans.profiles.available',$plan->id) }}" class="btn btn-outline-primary"><i
                        class="fas fa-plus"></i> Adicionar uma Perfil</a>
                <div class="ml-auto">
                    <form action="{{ route('plans.search') }}" method="POST" class="form form-inline">
                        @csrf
                        <input type="text" name="filter" class="form-control" placeholder="Pesquisar">
                        <button type="submit" class="ml-1 btn btn-outline-primary"><i class="fas fa-filter"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-condensed table-hover table-bordered">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Administrar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($profiles as $profile)
                    <tr>
                        <td>{{ $profile->name }}</td>
                        <td>{{ $profile->description }}</td>
                        <td width="100">
                            <a href="{{ route('plans.profiles.detach',[$plan->id,$profile->id]) }}"
                               class="btn btn-sm btn-warning"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {!!$profiles->appends($filters)->links() !!}
            @else
                {!!$profiles->links() !!}
            @endif
        </div>
    </div>
@stop


