@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" id="form" method="post" action="update/{{$user->id}}">
                {{ csrf_field() }}

                <fieldset>

                    <!-- Form Name -->
                    <legend>Usuário</legend>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Nome</label>
                        <div class="col-md-4">
                            <input id="name" name="name" type="text" class="form-control input-md" value="{{$user->name}}">
                            <span class="help-block">Nome completo do usuário</span>
                        </div>
                    </div>

                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="client-email">Email</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input id="email" name="email" class="form-control" placeholder="email@seudominio.com"
                                       type="text" value="{{$user->email}}">
                            </div>
                            <p class="help-block">Email do usuário</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="client-email">Senha</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="password" name="password" class="form-control"
                                        type="password" value="{{$user->password}}">
                            </div>
                            <p class="help-block">Senha do usuario</p>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="btn-save"></label>
                        <div class="col-md-4" id="saveupdate">
                            <input type="submit" class="btn btn-success" value="Editar">
                        </div>
                    </div>


                </fieldset>
            </form>
        </div>
    </div>
</div>

@endsection
