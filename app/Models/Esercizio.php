<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Esercizio extends Model{

        protected $table='esercizio';

        protected $fillable=[
            'id','nome','img',
        ];

        public $timestamps=false;

       public function users(){
        return $this->belongsToMany(User::class,"scheda","eser","user")->withPivot("nome_scheda","n_serie","n_rep");
       }
/*
       public function scheda(){
           return $this->belongsToMany("App\Models\User","scheda","eser","user")->withPivot("nome_scheda","n_serie","n_rep");
       }*/
    }
    ?>