<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resume;
use App\Models\Vacancy;

class Speciality extends Model
{
    use HasFactory;

    public function resume(){
        return $this->hasMany(Resume::class);
    }

    public function vacancies(){
        return $this->hasMany(Vacancy::class);
    }
}
