<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Invitacion;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create(Request $request)
    {
        $rules = [
            'nombre' => 'required',
            'telefono' => 'required',
            'attend' => 'required',
            'friends' => 'required',
            'paxs' => 'required',
            'pax_names' => 'required'
        ];

        $messages = [
            'nombre.required' => 'Es necesario poner un nombre',
            'telefono.required' => 'Es necesario asignar un telefono',
            'attend.required' => 'Es necesario saber si asistiras al evento',
            'friends.required' => 'Es necesario si vendras con acompañantes',
            'paxs.required' => 'Es necesario sabes el numero de acompañantes',
            'pax_names.required' => 'Es necesario saber el nombre de tus acompañantes'
        ];

        $this->validate($request,$rules,$messages);

        Mail::to('osiris.moralesrz@gmail.com')->bcc('juan.alucard.02@gmail.com')->send(new Invitacion($request));

        return back()->with('success','Su mensaje se envio con exito.');

    }
}
