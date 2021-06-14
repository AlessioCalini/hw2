<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Routing\Controller;
    use App\Models\User;
    use App\Models\Corso;
    use Illuminate\Http\Request;

    class CorsiController extends Controller{

        public function index(){
            $user = User::find(session('user_id'))->first();
            if(!isset($user))
                return view('welcome');
            
             return view('corsi')->with('csrf_token', csrf_token());
        }

        public function check_contenuti(){
            $corso=Corso::all();
            if($corso->count()==9){
                return 1;
            }else{
                return 0;
            }
        }

        public function fetch_contenuti(){
            $corsi=Corso::all();
            return response()->json($corsi);
        }

        public function cont(){
            $CONTENUTI=[
                [ "nome"=>"Functional Training",
                 "immagine"=>"https://qph.fs.quoracdn.net/main-qimg-69ee2c5f33585a27547f671f7d9a4d87",
                 "npartecipanti"=>"11",
                 "capienza"=>"15",
                 "id"=>"001"],
          
                 ["nome"=>"CrossFit",
                 "immagine"=>"https://cdn.gvmnet.it/admingvm/media/immagininews/ossamuscoliearticolazioni/crossfit_giornata_sport.jpeg",
                 "npartecipanti"=>"21",
                 "capienza"=>"30",
                 "id"=>"002"],
          
                  ["nome"=>"Spinning",
                  "immagine"=>"https://esperienzasportiva.decathlon.it/area/fotorep3/160_SPINNING3_DEC-001041.jpg",
                  "npartecipanti"=>"14",
                  "capienza"=>"16",
                  "id"=>"003"],
          
                  ["nome"=>"Aero KickBoxing",
                  "immagine"=>"https://dta0yqvfnusiq.cloudfront.net/burns43043213/2019/06/Cardio-Kickboxing-Fitness-Classes-Brookhaven-5d03c27a33dfc-1140x760.jpg",
                  "npartecipanti"=>"10",
                  "capienza"=>"20",        
                  "id"=>"004"],
          
                  ["nome"=>"Crush Style",
                  "immagine"=>"https://www.aziendainfiera.it/imageserver/cf_letterbox/558/300/files/immagini/news/crush-style.jpg",
                  "npartecipanti"=>"19",
                  "capienza"=>"30",        
                  "id"=>"005"],
          
                  ["nome"=>"G.A.G",
                  "immagine"=>"http://www.openspacepalestra.it/wp-content/uploads/2016/05/evid_gag.jpg",
                  "npartecipanti"=>"9",
                  "capienza"=>"12",        
                  "id"=>"006"],
          
                  ["nome"=>"Ginnastica Posturale",
                  "immagine"=>"https://www.almasportlecce.it/wp-content/uploads/2019/06/ginnastica-posturale.jpg",
                  "npartecipanti"=>"8",
                  "capienza"=>"15",        
                  "id"=>"007"],
          
                  ["nome"=>"Zumba",
                  "immagine"=>"https://www.insportsrl.it/arcore/wp-content/uploads/sites/12/2019/06/zumba.jpg",
                  "npartecipanti"=>"24",
                  "capienza"=>"32",        
                  "id"=>"008"],
          
                  ["nome"=>"Pilates",
                  "immagine"=>"https://www.corsipilatesroma.it/wp-content/uploads/2018/02/pilates-uomini-1200x628.png",
                  "npartecipanti"=>"15",
                  "capienza"=>"20",        
                  "id"=>"009"]
          
              ];
        
              
              return $CONTENUTI;
    
        }

        public function inserimento(Request $request){
            $newCorso=Corso::create([
                'id'=>$request->id,
                'nome'=>$request->titolo,
                'npartecipanti'=>$request->npartecipanti,
                'capienza'=>$request->capienza,
                'immagine'=>$request->immagine,
            ]);
            if($newCorso){
                return 1;
            }else{
                return 0;
            }
        }

        public function cerca(){
            $data=request();
            $titolo=$data['titolo'];
            $corso=Corso::where('nome',$titolo)->first();
            return response()->json($corso);
        }

        public function iscrizione(){
            $data=request();
            $titolo=$data['titolo'];
            $user=User::find(session('user_id'));

            try{
                $user->corsi()->attach($titolo);
            }catch(\Illuminate\Database\QueryException $exception){
                return $exception->getMessage();
            }
            return 1;
            
        }
}
