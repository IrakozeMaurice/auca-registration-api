<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $guarded = [];

    public function registrations()
    {
        return $this->belongsToMany(Registration::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }
}
