@extends('layouts.app')

@section('content')

    <div class="row mt-5">
        <div class="col-md-4 d-flex justify-content-center">
            <img src="{{asset('assets/sos-logo.png')}}" alt="" width="200px">
        </div>
        <div class="col-md-8">
            <div class="callout callout-info">
                <h4>Bem Vindo!</h4>
                <p class="text-justify">Seja muito bem vindo, fazendo parte da nossa família SOS Gás!
                    Abaixo segue formulário para ser preenchidos com os seus dados para confecção do Contrato Fácil da
                    SOS
                    Gás, ao final, receberá um e-mail com a sua via contratual pré-aprovada, onde ficará salvo e terá a
                    opção
                    de download imediato. Surgindo alguma dúvida, poderá nos procurar no contato, (83) 3023-0500 ou no
                    <a href="mailto:contratos@grupososgas.com.br">e-mail: contratos@grupososgas.com.br.</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12 mb-2">
        <div class="card">
            <div class="card-header">
                Formulário de Pré Contrato
            </div>

            <div class="card-body">
                @if(session('message'))
                    <p class="alert alert-info">
                        {{ session('message') }}
                    </p>
                @endif
                <form role="form" action="{{ url('/enviar-form') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                        <label>Nome Completo</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                               name="first_name"
                               value="{{ old('first_name') ?? '' }}">
                        @error('first_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label>Como podemos te chamar?</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                               name="last_name"
                               value="{{ old('last_name') ?? '' }}">
                        @error('last_nam')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                        <label>CPF</label>
                        <input type="text" class="form-control @error('ssn') is-invalid @enderror" name="ssn"
                               value="{{ old('ssn') ?? '' }}">
                        @error('ssn')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label>RG</label>
                        <input type="text" class="form-control @error('register') is-invalid @enderror" name="register"
                               value="{{ old('register') ?? '' }}">
                        @error('register')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label>Data de Nascimento</label>
                        <input type="date" class="form-control @error('birth_date') is-invalid @enderror"
                               name="birth_date"
                               value="{{ old('birth_date') ?? '' }}">
                        @error('birth_date')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3 col-sm-12">
                        <label>Telefone Residencial</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                               value="{{ old('phone') ?? '' }}">
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                        <label>Telefone Celular</label>
                        <input type="text" class="form-control @error('mobile_phone') is-invalid @enderror"
                               name="mobile_phone" value="{{ old('mobile_phone') ?? '' }}">
                        @error('mobile_phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label>Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') ?? '' }}">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                        <label>Nome do Condominio</label>
                        <input type="text" class="form-control @error('condominium_name') is-invalid @enderror"
                               name="condominium_name" value="{{ old('condominium_name') ?? '' }}">
                        @error('condominium_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="form-group col-md-3 col-sm-12">
                        <label>Apto</label>
                        <input type="text" class="form-control @error('condominium_apto') is-invalid @enderror"
                               name="condominium_apto" value="{{ old('condominium_apto') ?? '' }}">
                        @error('condominium_apto')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-3 col-sm-12">
                        <label>Bloco</label>
                        <input type="text" class="form-control @error('condominium_block') is-invalid @enderror"
                               name="condominium_block" value="{{ old('condominium_block') ?? '' }}">
                        @error('condominium_block')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-2">
                        <label>Cep</label>
                        <input type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode"
                               id="cep" value="{{ old('zipcode') ?? '' }}">
                        @error('zipcode')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-8">
                        <label>Rua</label>
                        <input type="text" class="form-control @error('address_1') is-invalid @enderror"
                               name="address_1"
                               id="rua" value="{{ old('address_1') ?? '' }}">
                        @error('address_1')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-2">
                        <label>Número</label>
                        <input type="text" class="form-control @error('address_number') is-invalid @enderror"
                               name="address_number" value="{{ old('address_number') ?? '' }}">
                        @error('address_number')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                        <label>Cidade</label>
                        <input type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                               id="cidade"
                               value="{{ old('city') ?? '' }}">
                        @error('city')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label>Bairro</label>
                        <input type="text" class="form-control @error('province') is-invalid @enderror" name="province"
                               id="bairro" value="{{ old('province') ?? '' }}">
                        @error('province')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label>Estado</label>
                        <input type="text" class="form-control @error('state') is-invalid @enderror" name="state"
                               id="uf"
                               value="{{ old('state') ?? '' }}">
                        @error('state')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    </div>
                    <div>
                        <button class="btn btn-sm btn-primary" type="submit"><strong>Enviar Proposta</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>





@endsection

@section('scripts')
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('js/viaCep.js')}}"></script>
    <script>
        $('input[name=phone]').mask('(99)9999-9999')
        $('input[name=mobile_phone]').mask('(99)9.9999-9999')
        $('input[name=ssn]').mask('999.999.999-99')
        $('input[name=zipcode]').mask('99.999-999')
    </script>
@endsection
