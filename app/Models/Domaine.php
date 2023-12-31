<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'slug', 'photo'];
    public function modules()
    {
        return $this->hasMany(Module::class, 'id_domaine');
    }

}
