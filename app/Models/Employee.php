<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'role', 'updated_at', 'created_at'];


    // An Employee can have multiple tasks
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
