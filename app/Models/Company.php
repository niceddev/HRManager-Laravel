<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vacancy;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'company_name',
        'description',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function company_vacancies(){
        return $this->hasMany(Vacancy::class);
    }
}
