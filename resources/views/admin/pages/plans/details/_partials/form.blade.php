@csrf

<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="inform o detalhe do plano" value="{{ $detail->name ?? old('name') }}">
    @error('name')
        <div class="span">
            <p class="badge badge-danger">{{ $message }}</p>
        </div>
    @enderror
</div>

<div class="form-group">
    <a  href="{{ route('plans.details.index',$plan->url) }}" class="btn btn-default">Voltar</a>
    <button type="submit" class="btn btn-primary"> Salvar</button>
</div>
