<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $primaryKey = 'idTask';
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'idUser');
    }
    public function sector()
    {
        return $this->belongsToMany(Sector::class, 'idSector');
    }
}
