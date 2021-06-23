<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarEmail;

class ControladorEmail extends controller
{
	public function enviar(Request $req)
	{
		$data = array(
		'nombre'     =>   $req->nombre,
		 'email'     =>   $req->email,
		 'email2'     =>   $req->email2,
		 'mensaje'   =>   $req->mensaje,
		 'file'   =>   $req->file('file'),
		 'asunto'     =>   $req->asunto,
		);
		
		Mail::to($req->email)->send(new EnviarEmail($data));
		echo "Email enviado";
	}
}
