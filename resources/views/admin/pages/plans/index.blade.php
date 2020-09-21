@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Planos</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}">Planos</a></li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <a href="{{ route('plans.create') }}" class="btn btn-outline-primary"><i class="fas fa-plus"></i>
                    Adicionar</a>
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
                    <th>Valor</th>
                    <th>Administrar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($plans as $plan)
                    <tr>
                        <td>{{ $plan->name }}</td>
                        <td>{{ $plan->price }}</td>
                        <td width="130">
                            <a href="{{ route('plans.details.index',$plan->url) }}"
                               class="btn btn-sm btn-outline-primary"><i class="fas fa-list"></i></a>
                            <a href="{{ route('plans.edit',$plan->url) }}" class="btn btn-sm btn-dark"><i
                                    class="fas fa-edit"></i></a>
                            <a href="{{ route('plans.show',$plan->url) }}" class="btn btn-sm btn-warning"><i
                                    class="fas fa-ellipsis-v"></i></a>
                            <a href="{{ route('plans.profiles',$plan->id) }}" class="btn btn-sm btn-warning"><i
                                    class="fas fa-users"></i></a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {!!$plans->appends($filters)->links() !!}
            @else
                {!!$plans->links() !!}
            @endif
        </div>
    </div>
@stop


