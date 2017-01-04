@extends('layout.master')

@section('content')

<div class="container">
  <h4>Cadastro de usuário</h4>
  <div class="row">
    <div class="col s12">
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        <div class="input-field col s12">
          <input  id="name" type="text" name="name" class="validate" required>
          <label for="first_name">Nome</label>
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
        <div class="input-field col s12">
          <input  id="email" type="email" class="validate" name="email" required>
          <label for="email">E-mail</label>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
        <div class="input-field col s6">
          <input id="senha" type="password" class="validate" name="password" required>
          <label for="senha">Senha</label>
        </div>
        <div class="input-field col s6">
          <input id="senha_confirma" type="password" class="validate" name="password_confirmation" required>
          <label for="first_name">Confirma Senha</label>
        </div>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <div class="col s12">
          <button class="btn waves-effect teal darken-4" type="submit" name="action">Cadastrar
              <i class="material-icons right">send</i>
            </button>
        </div>
      </form>
    </div>
  </div>


</div>


@endsection
