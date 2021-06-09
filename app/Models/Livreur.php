<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'role',
        'is_admin',
        'password',
<<<<<<< HEAD
=======
       
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD
=======

    

>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
}
