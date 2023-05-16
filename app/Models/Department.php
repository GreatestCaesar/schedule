<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded = false;
    public $timestamps = false;

    public function teachers(){
        return $this->hasMany(Teacher::class, 'department_id','id');
    }
}
