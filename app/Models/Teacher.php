<?php

namespace App\Models;

use App\Models\Gender;
use App\Models\Section;
use App\Models\Specialization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded=[];

    // علاقة بين المعلمين والتخصصات لجلب اسم التخصص
    public function specializations()
    {
        return $this->belongsToMany(Specialization::class, 'Specialization_id','id');
    }

    // علاقة بين المعلمين والانواع لجلب جنس المعلم
    public function genders()
    {
        return $this->belongsToMany(Gender::class,'Gender_id','id');
    }

// علاقة المعلمين مع الاقسام
public function Sections()
{
    return $this->belongsToMany(Section::class,'teacher_section','id');
}

}
