<?php

namespace App\Exports;

use App\Models\Country;
use Maatwebsite\Excel\Concerns\FromCollection;

class CountryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
	protected $crit;

	function __construct($crit) {
        $this->crit = $crit;
	}
	
    public function collection()
    {
        return Country::where('Name', 'like', "%$this->crit%")->orwhere('Continent', 'like', "%$this->crit%")->get();;
    }
}