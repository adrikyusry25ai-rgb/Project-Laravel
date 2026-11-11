<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classroom;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $with = ["classroom"];
    protected $fillable = [
        'name',
        'email',
        'classroom_id',
        'phone',
        'address',
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class , 'classroom_id',);
    }
}
