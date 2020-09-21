@extends('adminlte::page')

@section('title',"Detalhes do plano {$plan->name}")

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detalhes do Planos <strong>{{$plan->name}}</strong></h1>
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
        <div class="card-header">
            <div class="row">
                <a href="{{ route('plans.details.create',$plan->url) }}" class="btn btn-outline-primary"><i class="fas fa-plus"></i> Adicionar Detalhe</a>
{{--                <div class="ml-auto">--}}
{{--                    <form action="{{ route('plans.search') }}" method="POST" class="form form-inline">--}}
{{--                        @csrf--}}
{{--                        <input type="text" name="filter" class="form-control" placeholder="Pesquisar">--}}
{{--                        <button type="submit" class="ml-1 btn btn-outline-primary"><i class="fas fa-filter"></i></button>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="card-body">
            <table class="table table-condensed table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($details as $detail)
                    <tr>
                        <td>{{ $detail->name }}</td>
                        <td>
                            <a href="{{ route('plans.details.edit', [$plan->url, $detail->id]) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('plans.details.show',[$plan->url,$detail->id]) }}" class="btn btn-warning"><i class="fas fa-ellipsis-v"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="row">
                <a href="{{ route('plans.index') }}" class="btn btn-default">Voltar</a>
            </div>
{{--            @if(isset($filters))--}}
{{--                {!!$details->appends($filters)->links() !!}--}}
{{--            @else--}}
{{--                {!!$details->links() !!}--}}
{{--            @endif--}}
        </div>
    </div>


@endsection
