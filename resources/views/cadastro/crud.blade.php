@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">


        <!-- LIST -->
        <div class=col-md-12>

            <legend>Cadastros</legend>
            <a href="cadastro/create">  <button type="button" class="btn btn-secondary my-2">Novo cadastro</button></a>
            <table class="table table-bordered table-condensed table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th></th>
                    <th></th>
                </tr>

                </thead>
                @if($cadastros)
                    <tbody id="form-list-client-body">
                    @foreach($cadastros as $cadastro)
                        <tr>
                            <td>{{$cadastro->nome}}</td>
                            <td>{{$cadastro->email}}</td>
                            <td>{{$cadastro->telefone}}</td>
                            <td><a href="cadastro/{{$cadastro->id}}" class="btn btn-primary" role="button">Alterar</a> </td>
                            <td><a href="cadastro/delete/{{$cadastro->id}}" class="btn btn-danger" role="button">Excluir</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                @endif
            </table>


        </div>


        <br> 

        <!-- view -->


    </div>
</div>
@endsection


