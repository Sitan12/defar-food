<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable =[
        'name', 'email', 'role', 'is_admin', 'password',
    ];
<<<<<<< HEAD
=======

    public function plats()
    {
        return $this->hasMany('App\Models\Plat');
    }

    

>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
}
