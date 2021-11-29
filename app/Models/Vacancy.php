<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Speciality;
use App\Models\City;

class Vacancy extends Model
{
    use HasFactory;

    public function vacancy_company(){
        return $this->belongsTo(Company::class);
    }

    public function vacancy_speciality(){
        return $this->belongsTo(Speciality::class);
    }

    public function vacancy_city(){
        return $this->belongsTo(City::class);
    }
}
