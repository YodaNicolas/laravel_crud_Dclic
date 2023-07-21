<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utili extends Model
{
    use HasFactory;

     protected $fillable = 
     ['name', 'prenom', 'date_naissance', 'image'];
    
    //     [  'name',
    //     'prenom',
    //     'date_naissance',
    //     'password'
    // ];
}
