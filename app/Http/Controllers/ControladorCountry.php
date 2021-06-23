<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\DB;	
use App\Exports\CountryExport;
use Maatwebsite\Excel\Facades\Excel;

class ControladorCountry extends Controller
{
	
    public function mostrarCountry(Request $req)
	{
		$crit = $req['criterio'];
		$cids = DB::table('country')->where('Name', 'like', "%$crit%")->orwhere('Continent', 'like', "%$crit%")->paginate(6);
		return view('vista_country',['cids' => $cids, 'crit' => $crit ]);
		
	}
		public function vercountry() {
			
			$cids = Country::paginate(6);
			return view('vista_country',["cids" => $cids, 'crit' => '']);
			
		}
		
		
		//excel
		public function export(Request $req) 
        {
            return Excel::download(new CountryExport($req->crit), 'ND.xlsx');
        }
		
		

		
}