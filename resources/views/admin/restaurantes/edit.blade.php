@extends('layouts.app')

@section('content')
    <h1>Edição de Restaurantes</h1>
    <hr>

    <form action="{{ route('restaurante.update', ['restaurante' => $restaurante->id]) }}" method="POST">
        {{ csrf_field() }}
        <p class="form-group">
            <label>Nome do restaurante</label>
            <input type="text" name="nome" value="{{ old('nome') != '' ? old('nome') : $restaurante->nome }}" class="form-control @if($errors->has('nome')) is-invalid @endif">
            <span class="invalid-feedback">
                @if($errors->has('nome'))
                    <strong> {{ $errors->first('nome') }} </strong>
                @endif
            </span>    
        </p>
        <p class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco" value="{{ old('endereco') != '' ? old('endereco') : $restaurante->endereco  }}" class="form-control @if($errors->has('endereco')) is-invalid @endif">
            <span class="invalid-feedback">
                @if($errors->has('endereco'))
                    <strong> {{ $errors->first('endereco') }} </strong>
                @endif
            </span>    
        </p>
        <p class="form-group">
            <label>Fale sobre o restaurante</label>
            <textarea class="form-control @if($errors->has('descricao')) is-invalid @endif" name="descricao" id="" cols="30" rows="10"> {{ old('descricao') != '' ? old('descricao') : $restaurante->descricao }} </textarea>
            <span class="invalid-feedback">
                @if($errors->has('descricao'))
                    <strong> {{ $errors->first('descricao') }} </strong>
                @endif
            </span>    
        </p>
        <input type="submit" value="Atualizar" class="btn btn-success btn-lg">
    </form>
@endsection