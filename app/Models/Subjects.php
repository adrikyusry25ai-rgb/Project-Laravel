<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teachers;

class Subjects extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectsFactory> */
    use HasFactory;

    protected $table = 'subjects';
    protected $fillable = [
        'name',
        'code',
    ];

   public function teacher()
{
    return $this->hasOne(Teachers::class, 'subject_id');
}
}
