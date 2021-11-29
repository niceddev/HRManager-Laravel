<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vacancy;

class Company extends Model
{
    use HasFactory;

    public function company_vacancies(){
        return $this->hasMany(Vacancy::class);
    }
}
