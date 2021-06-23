<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;	

class ControladorArchivo extends Controller
{
	//recibe archivo a travez de un reques
    public function upload(Request $req)
	{
		$nombre = $req->file('file')->getClientOriginalName();
		$extension = $req->file('file')->extension();
		$code = $req['code'];
		
		if($extension == 'png' || $extension == 'jpg'){
			$ct = DB::SELECT("UPDATE country SET imagen = '".$nombre."' WHERE code='".$code."'");
			
			$path = $req->file('file')->storeAs('Mis_Archivos',$nombre);
			
			
         /*$path = $req->file('file')->store('Mis_Archivos');
         echo "El archivo se subio exitosamente en: ".$path;
         echo "La extencion del archivo es: ".$extencion;*/
		 
			return redirect()->route('mostrar_country');
		}
		else{
			echo "Tu archivo debe ser PNG o JPG";
		}
				
	}
}