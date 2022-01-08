<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ["name", 'semester', 'espb', 'department_id'];
    protected $with = ['department'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
