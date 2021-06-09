<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileRestaurant extends Model
{
    use HasFactory;
    protected $fillable =[
<<<<<<< HEAD
        'adresse', 'telephone', 'categorie', 'reseausocial', 'user_id',
=======
        'adresse', 'telephone', 'categorie', 'reseausocial','description', 'user_id', 'photo','latitude','longitude'
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
    ];

    public function user()
    {
       return $this->belongsTo('App\Models\User', 'user_id');
    }

<<<<<<< HEAD
=======
    public function getImage()
    {
            $photoPath = $this->photo ?? 'photoProfile/default.jpg';
            return "/storage/" .$photoPath;
    }

>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
}
