<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subjects;

class Teachers extends Model
{
    /** @use HasFactory<\Database\Factories\TeachersFactory> */
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = [
        'name',
        'niy',
        'subject_id',
        'start_date',
    ];

    public function subjects()
    {
        return $this->belongsTo(Subjects::class, 'subject_id');
    }
}
