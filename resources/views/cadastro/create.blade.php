@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" id="form" method="post" action="new">
                {{ csrf_field() }}

                <fieldset>

                    <!-- Form Name -->
                    <legend>Cadastro</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nome">Nome</label>
                        <div class="col-md-4">
                            <input id="nome" name="nome" type="text" class="form-control input-md" value="">
                        </div>
                    </div>

                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input id="email" name="email" class="form-control" placeholder="email@seudominio.com"
                                       value="" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Endereço</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="endereco" name="endereco" class="form-control" type="text" value="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Telefone</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="telefone" name="telefone" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Estado</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="estado" name="estado" class="form-control" type="text" value="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Cidade</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="cidade" name="cidade" class="form-control" type="text" value="">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="btn-save"></label>
                        <div class="col-md-4" id="saveupdate">
                            <button id="btn-save" name="btn-save" class="btn btn-success">Salvar</button>
                        </div>
                    </div>


                </fieldset>
            </form>
        </div>
    </div>
</div>

@endsection
