<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \stdClass;
use \DateTime;
use Illuminate\Support\Facades\DB;
use \App\object_sorter;
use Response;
use \App\Calculos;
use \App\Conversiones;
use Mail;
use \App\Mail\enviarCorreo;
use \App\Mail\enviarCorreoCliente;
#409 error de token

class Control extends Controller
{
  public function prueba (Request $request)
  {
    echo "it works";
  }
}
