
@extends('layout.master')                         

@section('title', 'Reservas')                                 

@section('content')

<div class="container">

  <div class="row">
    <div class="section">
      <div class="col s12">

<?php
  $dataheader = ''; ?>

    @foreach($db as $reservas)
      <?php
          $data = $reservas->data;
          if($data <> $dataheader){
              echo '    <div class="divider"></div>';
              echo '<h5><i class="material-icons">today</i> '.date('d/m/Y',  strtotime($data)).'</h5>';
              $dataheader = $data;
          }
       ?>



<?php
$color ="";
 if($reservas->status == 4)
{
  $color = " green lighten-4";
}
else if($reservas->status == 9)
{
  $color = " red lighten-4";
}
?>
        <ul class="collapsible popout" data-collapsible="accordion">
          <li>

            <div class="collapsible-header <?php echo $color ?>"><span class="new badge" data-badge-caption="pessoas">{{$reservas->qtdpessoa}}</span> <span class="new badge" data-badge-caption="mesas">{{$reservas->qtdmesa}}</span>{{$reservas->nome}} - <small>{{$reservas->horas}}</small></div>
            <div class="collapsible-body">

                <a href="{{asset('reservas/canceled/')}}/{{ $reservas->id}}"><i class="small material-icons red-text icon-link">thumb_down</i></a>
                <a href="{{asset('reservas/confirmation/')}}/{{ $reservas->id}}"><i class="small material-icons green-text icon-link">thumb_up</i></a>


                  <p>
                    <strong>Nome:</strong>{{$reservas->nome}} {{ $reservas->ultimonome }}<br />
                    <strong>Celular:</strong> {{ $reservas->celular }}<br />
                      <strong>E-mail:</strong>{{ $reservas->email }}<br />
                  </p>

            </div>
          </li>
        </ul>

        @endforeach

      </div>
    </div>




  </div>

</div>

@endsection
