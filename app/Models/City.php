<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vacancy;
use App\Models\User;

class City extends Model
{
    use HasFactory;

    public function vacancies(){
        return $this->hasMany(Vacancy::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

}
