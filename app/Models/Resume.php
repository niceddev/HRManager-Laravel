<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Speciality;
use \App\Models\User;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'speciality_id',
        'title',
    ];

    public function resume_skills(){
        return $this->belongsToMany(Skill::class);
    }

    public function resume_speciality(){
        return $this->belongsTo(Speciality::class);
    }

    public function resume_user(){
        return $this->belongsTo(User::class);
    }
}
