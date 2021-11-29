<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Speciality;
use \App\Models\User;

class Resume extends Model
{
    use HasFactory;

    public function r_speciality(){
        return $this->belongsTo(Speciality::class);
    }

    public function r_user(){
        return $this->belongsTo(User::class);
    }
}
