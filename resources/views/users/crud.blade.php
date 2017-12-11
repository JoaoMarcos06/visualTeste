@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">


        <!-- LIST -->
        <div class=col-md-12>

            <legend>Usuários</legend>

            <a href="users/create"><button type="button" class="btn btn-secondary my-2">Novo usuário</button></a>
            <table class="table table-bordered table-condensed table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>

                </thead>
                @if($users)
                    <tbody id="form-list-client-body">
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="users/{{$user->id}}" class="btn btn-primary" role="button">Alterar</a> </td>
                        <td><a href="users/delete/{{$user->id}}" class="btn btn-danger" role="button">Excluir</a> </td>
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
