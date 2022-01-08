<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    private $fillable = ["name", 'description', 'required', 'points', 'exam_id'];
    protected $with = ['exam'];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
