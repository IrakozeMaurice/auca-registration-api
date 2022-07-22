<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Registration extends Model
{

    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function getRegistrationYear()
    {
    	return Carbon::createFromFormat('m/d/Y', $this->created_at);
    }
}
