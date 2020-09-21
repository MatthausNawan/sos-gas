@extends('admin.layouts.admin')

@section('main-title','Condominios')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Lista de Condominios Participantes</h5>
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
                                <th>Codigo</th>
                                <th>Nome</th>
                                <th>Administrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($condominius as $condominium)
                            <tr class="gradeX">
                                <td>{{$condominium->id}}</td>
                                <td>{{$condominium->name}}</td>

                                <td class="center">
                                    <a href="{{ route('condominius.show',$condominium->id) }}" class="btn btn-primary btn-xs">
                                        Visualizar
                                    </a>
                                    <a href="{{ route('condominius.edit',$condominium->id) }}" class="btn btn-primary btn-xs">
                                        Editar
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
<link rel="stylesheet" href="{{ asset('css/plugins/dataTables/datatables.min.css')}}">
@endsection

@section('js')
<script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
<script src="{{ asset('js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $('#data-tables').DataTable();
</script>
@endsection
