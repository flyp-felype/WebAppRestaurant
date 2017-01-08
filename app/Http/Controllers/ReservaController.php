<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\smclientes;
use App\smreserva;

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
        //
        return view('reservas/reservas');
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
         $reserva->save();

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
}
