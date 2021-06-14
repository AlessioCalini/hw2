<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Corso extends Model{
        protected $table='corsi';

        protected $fillable=[
            'id','nome','npartecipanti','capienza','immagine',
        ];

        public $timestamps=false;

        public function users(){
            return $this->belongsToMany(User::class,"iscrizioni","corso","user");
        }

        /*
        public function iscrizioni(){
            return $this->belongsToMany("App\Models\User","iscrizioni","corso","user");
        }*/
        

    }
    ?>