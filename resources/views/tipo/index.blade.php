@extends('layouts.base')

@section('conteudo')

    <h1>
        
        Tipos de Lançamentos
        -
        <a href="{{route('tipo.create')}}" class="btn btn-primary">
            Novo
        </a>

        <table class="table table-striped table-border">
            <thead>
                <tr>
                    <th>Açôes</th>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>--</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipos->get() as $tipo)
                    
                <tr>
                    <td><a href="{{route('tipo.edit', ['id'=>$tipo->id_tipo])}}" class="btn btn-success">Editar

                    </a>
                    </td>
                    <td>{{$tipo->id_tipo}}</td>
                    <td>{{$tipo->tipo}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </h1>
    
@endsection