<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paramd extends Model
{
    protected $table = 'kds_cnc_paramd';
    protected $fillable = ['pardtbid', 'pardtabent', 'pardsdesc','pardldesc','pardvan1','pardvan2','pardvan3','pardvan4','pardvac1','pardvac2','pardvac3','parddate1','parddate2','parddate3','pardcomm'];

    public function paramh()
    {
    	return $this->belongTo('App\paramh');
    }

}
