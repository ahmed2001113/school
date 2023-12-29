<?php

namespace App\Models;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;
    
    protected $fillable=['Name','Name_en','Grade_id','Class_id'];

    protected $table = 'sections';
    public $timestamps = true;

    // علاقة بين الاقسام والصفوف لجلب اسم الصف في جدول الاقسام

    public function My_classs()
    {
        return $this->belongsTo(Classroom::class, 'Class_id','id');
    }

    // علاقة الاقسام مع المعلمين
    // public function teachers()
    // {
    //     return $this->belongsToMany('App\Models\Teacher','teacher_section');
    // }
}
