@extends('admin.layouts.admin')

@section('main-title','Solicitações')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Solicitações de Individualização de Gas</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" class="dropdown-item">Config option 1</a>
                        </li>
                        <li><a href="#" class="dropdown-item">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id='data-tables'>
                        <thead>
                            <tr>
                                <th>Condominio</th>
                                <th>Responsável</th>
                                <th>Endereço</th>
                                <th>Data Cadastro</th>
                                <th>Administrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contracts as $contract)
                            <tr class="gradeX">
                                <td>{{$contract->condominium->name}}</td>
                                <td>{{$contract->person}}</td>
                                <td>
                                    <span>{{$contract->address}}</span>
                                </td>
                                <td class="center">{{$contract->created_at}}</td>
                                <td class="center">
                                    <a href="{{ route('contracts.show',$contract->id) }}" class="btn btn-primary btn-xs">
                                        Visualizar
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/plugins/datatables/datatables.min.css')}}">
@endsection

@section('js')
<script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
<script src="{{ asset('js/plugins/dataTables/datatables.bootstrap4.min.js') }}"></script>
<script>
    $('#data-tables').DataTable();
</script>
@endsection
