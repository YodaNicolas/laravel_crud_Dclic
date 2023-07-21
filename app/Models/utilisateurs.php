<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateurs extends Model
{
    use HasFactory;

    protected $table = 'utilisateur';
    protected $fillable = ['name', 'prenom', 'date_naissance', 'image'];
}
