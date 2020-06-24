<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paramh extends Model
{
    protected $table = 'kds_cnc_paramh';
    protected $fillable = ['parhtbid', 'parhtabnm', 'parhtabcom'];

    /*public function paramd()
    {
    	return $this->hasOne('App\paramd');
    }
    */
}
