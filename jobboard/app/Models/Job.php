<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'employer_id'];
    
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

}
