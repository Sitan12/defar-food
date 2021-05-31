<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Commande extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable =['numero_commande','user_id','plat_id','livreur_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function plat()
    {
        return $this->belongsTo('App\Models\Plat');
    }

    
}
