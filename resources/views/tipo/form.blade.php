@extends('layouts.base')

@section('conteudo')
 @csrf
    <h1>
        @if($tipo)
        Atualizar Tipo
        @else
        Novo Tipo
        @endif
    </h1>
    @if ($tipo)
        <form action="{{route('tipo.update',['id'=>$tipo->id_tipo])}}" method="post"></form>
    @else
        <form action="{{route('tipo.store')}}" method="post"></form>
        
    @endif
    <form action="" method="post">
        <div class="row">
               <div class="form-group col-md-6">
               <label for="tipo" class="form-label">Tipo*</label>
               <input type="text" name="tipo" id="tipo" value="{{$tipo ? $tipo->tipo : old('tipo')}}" required class="form-control">               
             </div>
             <div class="form-group col-md-2">
                <input type="submit" value="{{ $tipo ? 'Atualizar' : 'Cadastrar' }}"
                class="btn btn-dark">
             </div>
        </div>
    </form>

@endsection