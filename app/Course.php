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

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    protected $hidden = ['id', 'created_at', 'updated_at'];
}
