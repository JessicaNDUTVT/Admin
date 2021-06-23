<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorCalculadora extends Controller
{
    
    public function sumar(Request $req)
    {
		$num1 = $req['num1'];
		$num2 = $req['num2'];
		$oper = $req['operacion'];			
		$res;
		$req->flush();
		switch($oper){
			case 1:
				$res = $num1 + $num2;
				break;
			case 2:
				$res = $num1 - $num2;
				break;
			case 3:
				$res = $num1 / $num2;
				break;
			case 4: 
				$res = $num1 * $num2;
				break;					
		}
		//return back()->withInput();
		
		return view('calculadora',['res' => $res]);
    }
}