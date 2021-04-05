<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $guarded = [];

    public function branch()
    {
        return $this->hasmany(Branch::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
