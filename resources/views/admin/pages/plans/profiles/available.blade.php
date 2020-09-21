@extends('adminlte::page')

@section('title', "Perfis do Plano: {$plan->name}")

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Adicionar Perfil ao Plano <strong>{{ $plan->name }}</strong></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
                <li class="breadcrumb-item"><a href="{{ route('plans.profiles',$plan->id) }}">Perfis</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('plans.profiles.available',$plan->id) }}">Perfis
                        Disponiveis</a></li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="ml-auto">
                    <form action="{{ route('plans.profiles.available',$plan->id) }}" method="POST"
                          class="form form-inline">
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
                    <th></th>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
                </thead>
                <tbody>
                <form action="{{ route('plans.profiles.attach', $plan->id) }}" method="post">
                    @csrf
                    @forelse($profiles as $profile)
                        <tr>
                            <td width="40">
                                <input type="checkbox" name="profiles[]" value="{{ $profile->id }}">
                            </td>
                            <td>{{ $profile->name }}</td>
                            <td>{{ $profile->description }}</td>
                        </tr>
                    @empty
                        <span class="badge badge-danger my-1">Nenhuma Perfil disponível no momento</span>
                    @endforelse
                    <tr>
                        <td colspan="500">
                            <button type="submit" class="btn btn-primary">Vincular</button>
                        </td>
                    </tr>
                </form>
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


