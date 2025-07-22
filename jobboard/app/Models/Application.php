<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = ['job_id', 'candidate_name', 'candidate_email', 'cover_letter', 'resume_path'];

}
