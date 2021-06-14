<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password','email','name','surname','propic','nCorsi',
        
        ];

        public $timestamps=false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
   
    public function corsi(){
        return $this->belongsToMany(Corso::class,"iscrizioni","user","corso");
    }

    /*
    public function iscrizioni(){
        return $this->belongsToMany("App\Models\Corso","iscrizioni","user","corso");
    }*/

    /*
    public function esercizio(){
        return $this->belongsToMany("App\Models\Esercizio","scheda","user","eser");
    }*/

    public function scheda(){
        return $this->belongsToMany(Esercizio::class,"scheda","user","eser")->withPivot('nome_scheda','n_serie','n_rep');
    }

    

}

?>
