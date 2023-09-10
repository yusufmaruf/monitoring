<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $table = 'sectors';
    protected $primaryKey = 'idSector';
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'task_user');
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class, 'idDepartement');
    }
}
