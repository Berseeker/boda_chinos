<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Invitacion;

class SendMailController extends Controller
{
    public function store(Request $request)
    {
        Mail::to('osiris.moralesrz@gmail.com')->send(new Invitacion($request));

        return response()->json(['status' => 'success', 'message' => 'Mensaje enviado con exito' ]);
    }
}
