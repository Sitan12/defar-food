<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        'adresse', 'numero', 'photo', 'user_id',
=======
        'adresse', 'numero', 'photo', 'user_id','longitude','latitude'
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
    ];

    public function user()
    {
       return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function getImage()
    {
            $photoPath = $this->photo ?? 'photoProfile/default.png';
            return "/storage/" .$photoPath;
    }
}
