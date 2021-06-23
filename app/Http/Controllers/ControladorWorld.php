<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use App\Exports\CityExport;
use Maatwebsite\Excel\Facades\Excel;

class ControladorWorld extends Controller
{    
    public function mostrar(Request $req)
    {
		$crit = $req['criterio'];		
		//$cids = DB::SELECT("SELECT * FROM city WHERE Name LIKE '%$crit%' OR District LIKE '%$crit%' ")->paginate(10);
		$cids = DB::table('city')->where('Name', 'like', "%$crit%")->orwhere('District', 'like', "%$crit%")->paginate(10);
		return view('vista_city',['cids' => $cids, 'crit' => $crit]);
    }	
	public function ver(){
		
		$cids = City::paginate(10);
		return view('vista_city',['cids' => $cids, 'crit' => '']);
		
	}	
	public function download(Request $req)
	{
		$crit = $req['crit'];
		$cids = DB::SELECT("SELECT * FROM city WHERE Name LIKE '%$crit%' OR District LIKE '%$crit%' ");
				
		$pdf = PDF::loadView('vista_citypdf', ['cids' => $cids])
        ->save(storage_path('app/public/') . 'archivo.pdf');
		return $pdf->download('archivo.pdf');
	}
	
	public function export(Request $req) 
    {
        return Excel::download(new CityExport($req->crit), 'cities.xlsx');
    }
	
	public function store(Request $req)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
		
		$crit = $req['crit'];
		$cids = DB::SELECT("SELECT * FROM city WHERE Name LIKE '%$crit%' OR District LIKE '%$crit%' ");
		
		$text = $section->addText("ID | NAME | DISTRICT | COUNTRYCODE | POPULATION");

foreach($cids as $cd){
	$text = $section->addText($cd->ID." | ".$cd->Name." | ".$cd->District." | ".$cd->CountryCode." | ".$cd->Population);
}	
			
       		
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('MiDcto.docx');
        return response()->download(public_path('MiDcto.docx'));
    }
	
	public function mostrar_country(Request $req)
	{
        $ct =DB::SELECT("SELECT *FROM Country LIMIT 10");
        return view('vista_country',['ct' => $ct]);
    }
}

	
