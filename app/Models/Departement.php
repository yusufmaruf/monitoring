<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $table = 'departement';
    protected $primaryKey = 'idDepartement';
    protected $guarded = [];

    public function sectors()
    {
        return $this->hasMany(Sector::class, 'idDepartement');
    }
}
