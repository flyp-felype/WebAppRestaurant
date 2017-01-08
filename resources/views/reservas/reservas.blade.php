
@extends('layout.master')                         

@section('title', 'Reservas')                                 

@section('content')

<div class="container">

  <div class="row">
    <div class="section">
      <div class="col s12">

        <div class="fixed-action-btn">
          <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>

        <h5><i class="material-icons">today</i> 01/01/2016</h5>
        <ul class="collapsible popout" data-collapsible="accordion">
          <li>
            <div class="collapsible-header"><span class="new badge" data-badge-caption="pessoas">5</span> <span class="new badge" data-badge-caption="mesas">1</span>First</div>
            <div class="collapsible-body">

                <i class="small material-icons red-text">thumb_down</i>
                <i class="small material-icons green-text">thumb_up</i>

                  <p>
                    <strong>Celular:</strong> (34)9995-9595<br />
                      <strong>E-mail:</strong>felypeweb@gmail.com<br />
                  </p>

            </div>
          </li>
        </ul>

        <ul class="collapsible popout" data-collapsible="accordion">
          <li>
            <div class="collapsible-header"><span class="new badge" data-badge-caption="pessoas">5</span> <span class="new badge" data-badge-caption="mesas">1</span>First</div>
            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
          </li>
        </ul>

      </div>
    </div>

    <div class="divider">
    </div>

    <div class="section">
      <div class="col s12">
        <h5><i class="material-icons">today</i> 01/01/2016</h5>
        <ul class="collapsible popout" data-collapsible="accordion">
          <li>
            <div class="collapsible-header"><span class="new badge" data-badge-caption="pessoas">5</span> <span class="new badge" data-badge-caption="mesas">1</span>First</div>
            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
          </li>
        </ul>
      </div>
    </div>
  </div>

</div>

@endsection
