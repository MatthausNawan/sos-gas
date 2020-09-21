
<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$plan->name ?? old('name') }}">
    @error('name')
        <span class="badge badge-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <label for="name">Valor</label>
    <input type="text" name="price" class="form-control @error('name') is-invalid @enderror"  value="{{$plan->price ?? old('price') }}">
    @error('price')
        <span class="badge badge-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <label for="name">Descrição Curta</label>
    <input type="text" name="description" class="form-control @error('name') is-invalid @enderror" value="{{$plan->description ?? old('description') }}">
    @error('description')
        <span class="badge badge-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <a  href="{{ route('plans.index') }}" class="btn btn-default">Voltar</a>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
