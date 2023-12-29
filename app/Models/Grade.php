<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable=['Name','Name_en','Notes'];
    protected $table = 'Grades';
    public $timestamps = true;
// علاقة المراحل الدراسية لجلب الاقسام المتعلقة بكل مرحلة
public function Sections()
{
    return $this->hasMany(Section::class,'Grade_id','id');
}
}
