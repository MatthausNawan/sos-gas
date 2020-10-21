@extends('layouts.app')


@section('content')
<section class="content-header">
    <h1>
        SOS - Gás
        <small>Formulário de Individualização de Gás</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Voltar pro Site</a></li>
        <li><a href="{{url('/solicitacao-individualizacao-de-gas')}}">Formulário</a></li>
        <li class="active">Obrigado</li>
    </ol>
</section>

<div class="login-box">
    <div class="callout callout-info">
        <h4>Obrigado!</h4>

        <p>Em instantes você receberá um email com o contrato, mas se quiser você pode fazer o download do documento clicando no botão abaixo:</p>

    </div>
    <div class="login-box-body">
        <a href="{{ route('contract.print',$contract_hash)}}" class="btn btn-info btn-block">Download do Contrato <i class="fa fa-file-pdf-o"></i></a>
    </div>

</div>

@endsection
