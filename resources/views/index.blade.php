
@extends('layout.master')                         

@section('title', 'Home')                                 

@section('content')

<div class="col s12 item-menu-home reserva">

<p>
<a href="reservas" class="white-text"><i class="material-icons">play_arrow</i> Reservas</a>
</p>


</div>
<div class="col s12 item-menu-home entradas">
<p>
  <i class="material-icons">play_arrow</i> Entradas

</p>

</div>
  <div class="col s12 item-menu-home menu">

<p>
  <i class="material-icons">play_arrow</i> Pratos Principais
</p>

  </div>

  <div class="col s12 item-menu-home bebidas">
<p>

  <i class="material-icons">play_arrow</i> Bebidas
</p>
  </div>
  <div class="col s12 item-menu-home contato">
<i class="material-icons">play_arrow</i> Contato
  </div>

@endsection
