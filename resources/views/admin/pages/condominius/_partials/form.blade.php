<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$condominium->name ?? old('name') }}">
    @error('name')
    <span class="badge badge-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <a href="{{ route('condominius.index') }}" class="btn btn-default">Voltar</a>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
