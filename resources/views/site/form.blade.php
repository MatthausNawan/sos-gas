@extends('site.layouts.site')

@section('content')

<section id="features" class="container services">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>Formulário <small></small></h5>
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

            <div class="col-sm-12">
                <form role="form" action="{{ route('contracts.save') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name">
                        @error('first_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Sobrenome</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name">
                        @error('last_nam')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control @error('document') is-invalid @enderror" name="document">
                        @error('document')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>RG</label>
                        <input type="text" class="form-control @error('register') is-invalid @enderror" name="register">
                        @error('register')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Data de Nascimento</label>
                        <input type="text" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date">
                        @error('birth_date')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Telefone Residencial</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone">
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Telefone Celular</label>
                        <input type="text" class="form-control @error('mobile_phone') is-invalid @enderror" name="mobile_phone">
                        @error('mobile_phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
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

                    <div class="form-group">
                        <label>Cep</label>
                        <input type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" id="cep">
                        @error('zipcode')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Rua</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="rua">
                        @error('address')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Numero</label>
                        <input type="text" class="form-control @error('address_number') is-invalid @enderror" name="address_number">
                        @error('address_number')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="cidade">
                        @error('city')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" class="form-control @error('neighborhood') is-invalid @enderror" name="neighborhood" id="bairro">
                        @error('neighborhood')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" id="uf">
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
    </div>
</section>

@endsection

@section('js')
<script>
    $('input[name=phone]').mask('(99)9999-9999')
    $('input[name=mobile_phone]').mask('(99)9.9999-9999')
    $('input[name=birth_date]').mask('99/99/9999')
    $('input[name=document]').mask('999.999.999-99')
    $('input[name=zipcode]').mask('99.999-999')
</script>

@endsection
