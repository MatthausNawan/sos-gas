@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        SOS - Gás
        <small>Formulário de Individualização de Gás</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Voltar pro Site</a></li>
        <!-- <li><a href="#">Layout</a></li> -->
        <li class="active">Fomulário</li>
    </ol>
</section>


<div class="login-box">
    <div class="callout callout-info">
        <h4>Bem Vindo!</h4>

        <p>Preencha as informações que forem solicitadas, no final você receberá um email com uma copia do contrato do serviço</p>
        <p>Se tiver alguma duvida, ligar para nosso telefone (73) 9999-9999 ou envie um email para : sos@email.com</p>
    </div>
    <div class="login-logo">
    </div>
    <div class="login-box-body">
        @if(session('message'))
        <p class="alert alert-info">
            {{ session('message') }}
        </p>
        @endif
        <form role="form" action="{{ url('/enviar-form') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') ?? '' }}">
                @error('first_name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Sobrenome</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') ?? '' }}">
                @error('last_nam')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="text" class="form-control @error('ssn') is-invalid @enderror" name="ssn" value="{{ old('ssn') ?? '' }}">
                @error('ssn')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>RG</label>
                <input type="text" class="form-control @error('register') is-invalid @enderror" name="register" value="{{ old('register') ?? '' }}">
                @error('register')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="text" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') ?? '' }}">
                @error('birth_date')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Telefone Residencial</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? '' }}">
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Telefone Celular</label>
                <input type="text" class="form-control @error('mobile_phone') is-invalid @enderror" name="mobile_phone" value="{{ old('mobile_phone') ?? '' }}">
                @error('mobile_phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? '' }}">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Condomínio</label>
                <select name="condominium_id" id="" class="form-control @error('condominium_id') is-invalid @enderror">
                    <option value="">Selecione...</option>
                    @foreach($condominiums as $cond)
                    <option value="{{ $cond->id }}">{{$cond->name}}</option>
                    @endforeach
                </select>
                @error('condominium_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group col-6">
                <label>Apto</label>
                <input type="text" class="form-control @error('apto') is-invalid @enderror" name="apto" value="{{ old('apto') ?? '' }}">
                @error('apto')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group col-6">
                <label>Bloco</label>
                <input type="text" class="form-control @error('bloco') is-invalid @enderror" name="bloco" value="{{ old('bloco') ?? '' }}">
                @error('bloco')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Cep</label>
                <input type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" id="cep" value="{{ old('zipcode') ?? '' }}">
                @error('zipcode')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Rua</label>
                <input type="text" class="form-control @error('address_1') is-invalid @enderror" name="address_1" id="rua" value="{{ old('address_1') ?? '' }}">
                @error('address_1')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Numero</label>
                <input type="text" class="form-control @error('address_number') is-invalid @enderror" name="address_number" value="{{ old('address_number') ?? '' }}">
                @error('address_number')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="cidade" value="{{ old('city') ?? '' }}">
                @error('city')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" class="form-control @error('province') is-invalid @enderror" name="province" id="bairro" value="{{ old('province') ?? '' }}">
                @error('province')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Estado</label>
                <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" id="uf" value="{{ old('state') ?? '' }}">
                @error('state')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div>
                <button class="btn btn-sm btn-primary" type="submit"><strong>Enviar</strong></button>
            </div>
        </form>
    </div>
</div>





@endsection

@section('scripts')
<script src="{{asset('js/jquery.mask.min.js')}}"></script>
<script src="{{asset('js/viaCep.js')}}"></script>
<script>
    $('input[name=phone]').mask('(99)9999-9999')
    $('input[name=mobile_phone]').mask('(99)9.9999-9999')
    $('input[name=birth_date]').mask('99/99/9999')
    $('input[name=ssn]').mask('999.999.999-99')
    $('input[name=zipcode]').mask('99.999-999')
</script>

@endsection
