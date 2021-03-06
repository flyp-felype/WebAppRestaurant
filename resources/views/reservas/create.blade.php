
@extends('layout.master')                         

@section('title', 'Home')                                 

@section('content')

<div class="container">

  <div class="row">
    <h4>Nova Reservas</h4>
    <div class="col s12">
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/reservas') }}">
        {{ csrf_field() }}

        <div class="input-field col s12">
          <input  id="name" type="email" name="email" class="validate" required>
          <label for="email">E-mail</label>
        </div>
        <div class="input-field col s12">
          <input  id="name" type="text" name="name" class="validate" required>
          <label for="nome">Primeiro Nome</label>

        </div>
        <div class="input-field col s12">
          <input  id="ultimo-name" type="text" name="ultimoname" class="validate" required>
          <label for="ultrimo-nome">Último Nome</label>

        </div>
        <div class="input-field col s12">

          <input  id="celular" type="tel" name="celular" class="validate" required>
          <label for="celular">Celular</label>

        </div>
        <div class="input-field col s12">

          <p style="color: #9e9e9e">Data da Reserva</p>
          <input  id="datareserva" placeholder="dd/mm/aaaa" type="date" name="datareserva" class="validate" required>

        </div>
        <div class="input-field col s12">
          <p style="color: #9e9e9e">Hora da Reserva</p>
          <input  id="horareserva" type="time" name="horareserva" class="validate" required>


        </div>
        <div class="input-field col s12">

          <input  id="qtdpessoas" type="number" name="qtdpessoas" class="validate" required>
          <label for="qtdpessoas">Qtd. de Pessoas</label>

        </div>
        <div class="input-field col s12">

          <input  id="qtdmesas" type="number" name="qtdmesas" class="validate" required>
          <label for="qtdmesas">Qtd. de Mesas</label>

        </div>

        <div class="col s12">
          <button class="btn waves-effect teal darken-4" type="submit" name="action">Cadastrar Reserva
            <i class="material-icons right">send</i>
          </button>
        </div>

      </form>
    </div>

  </div>

  @endsection
