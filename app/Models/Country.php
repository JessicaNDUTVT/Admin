<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{	
	protected $table = 'country';
	protected $primaryKey = 'Code';
	protected $Code;
	protected $Name;
	protected $Continent;
	protected $IndepYear;
	protected $Population;
	protected $LifeExpectancy;
}
