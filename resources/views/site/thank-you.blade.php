@extends('layouts.app')


@section('content')


    <div
        class="col-md-6 offset-md-3 col-sm-12 justify-content-center align-content-center align-items-center d-flex flex-column mt-5">
        <div class="callout callout-info">
            <h4>Obrigado!</h4>

            <p>Em instantes você receberá um email com o contrato, mas se quiser você pode fazer o download do documento
                clicando no botão abaixo:</p>

        </div>
        <div class="login-box-body">
            <a href="{{ route('contract.print',$contract_hash)}}" class="btn btn-info btn-block">Download do Contrato <i
                    class="fa fa-file-pdf-o"></i></a>
        </div>
    </div>

@endsection
