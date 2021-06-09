<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileLivreur extends Model
{
    use HasFactory;
    protected $fillable =[
<<<<<<< HEAD
        'nom', 'prenom', 'adresse', 'CNI', 'telephone', 'transport', 'user_id',
=======
        'nom', 'prenom', 'adresse', 'CNI', 'telephone', 'transport','photo', 'user_id','longitude','latitude'
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
    ];

    public function user()
    {
       return $this->belongsTo('App\Models\User', 'user_id');
    }

}
