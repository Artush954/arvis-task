<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table ='branches';
    protected $guarded =[];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
