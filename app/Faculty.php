<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{


    protected $guarded = [];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
