<?php

namespace App\Models;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable=['Name','Name_en','Grade_id'];
    public $timestamps = true;
    // علاقة بين الصفوف المراحل الدراسية لجلب اسم المرحلة في جدول الصفوف
    public function Grades()
    {
        return $this->belongsTo(Grade::class,'Grade_id','id');
    }
}



