<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\smclientes;
use App\smreserva;
use Illuminate\Support\Facades\DB;
use Newsletter;
use \DrewM\MailChimp\MailChimp;

class ReservaController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $cliente = new smclientes;
    $reserva = new smreserva;

    $db = DB::table('smreserva')
    ->join('smclientes', 'smreserva.smclienteid', '=', 'smclientes.id')
    ->select('smclientes.*', 'smreserva.*', 'smclientes.email')
    ->orderby('smreserva.data', 'desc')
    ->get();

    return view('reservas/reservas',['db' => $db]);
    //print_r($db);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
    return view('reservas/create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    try {


      $MailChimp = new MailChimp('56c312b78c8bd35c140756192750c679-us13');

      $list_id = '8f24ab088b';

      $result = $MailChimp->post("lists/$list_id/members", [
        'email_address' => $request->email,
        'merge_fields'  => ['FNAME'=>$request->name, 'LNAME'=> $request->ultimoname ],
        'status'        => 'subscribed',
      ]);

      //     print_r($result);

      if($result['status'] == "subscribed")
      {
        $cliente = new smclientes;
        $reserva = new smreserva;

        $maxcliente = $cliente->max('id') + 1;
        $cliente->id                 = $maxcliente;
        $cliente->nome               = $request->name;
        $cliente->email              = $request->email;
        $cliente->ultimonome         = $request->ultimoname;
        $cliente->celular            = $request->celular;
        $cliente->token              = '';
        $cliente->foto              = '';
        $cliente->id_facebook        = 1;
        $cliente->save();

        $maxreserva = $reserva->max('ID') + 1;
        $reserva->id           = $maxreserva;
        $reserva->data         = $request->datareserva;
        $reserva->horas        = $request->horareserva;
        $reserva->qtdpessoa    = $request->qtdpessoas;
        $reserva->qtdmesa      = $request->qtdmesas;
        $reserva->smclienteid  = $maxcliente;
        $reserva->status       = 1;
        $reserva->save();
      }


    } catch (Exception $e) {
      print($e);
    }

  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }


  public function updateConfirmation($id)
  {
    try{
      $reserva = new smreserva;
      $reserva->where('id', $id)
                ->update(['status' => 4]);
      return redirect('/reservas');
    }
    catch (Exception $e) {
      print($e);
    }
  }


  public function updateCanceled($id)
  {
    try{
      $reserva = new smreserva;
      $reserva->where('id', $id)
                ->update(['status' => 9]);
      return redirect('/reservas');
      }
    catch (Exception $e) {
      print($e);
    }
  }

}
