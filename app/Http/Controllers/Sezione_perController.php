<?php
    namespace App\Http\Controllers;
    
    use Illuminate\Routing\Controller;
    use App\Models\User;
    use Illuminate\Support\Facades\Http;
    use Illuminate\Support\Facades\DB;
    use App\Models\Corso;
    use App\Models\Esercizio;
    use Illuminate\Http\Request;

    class Sezione_perController extends Controller{
        public function index(){
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('welcome');
        return view('sezione_per',['user'=>$user, 'csrf_token'=>csrf_token()]);
        }

        public function carica_foto(){
            $request=request();
            $destination='uploads';
            $image=$request->file('avatar');
            $image_name=$image->getClientOriginalName();
            $request->file('avatar')->move($destination,$image_name);
            $user=User::find(session('user_id'));
            $user->propic=$image_name;
            $user->save();
            return redirect('sezione_per');
        }

        public function exe_img(){
            $json=Http::get('https://wger.de/api/v2/exerciseimage/?format=json&key=d6908488de27fe20034dc0616e4653902e4cf206%3Fformat%3Djson&limit=118');
            return $json;
        }

        public function exercise(){
            $json=Http::get('https://wger.de/api/v2/exercise/?language=2&limit=229');
            return $json;
        }

        public function check_exercise(){
            $eser=Esercizio::all();
            if($eser->count()==43){
                return 1;
            }else{
                return 0;
            }
        }

        public function ins_exe(Request $request){
            $newExe=Esercizio::create([
                'id'=>$request->id,
                'nome'=>$request->nome,
                'img'=>$request->img,
            ]);
            if($newExe){
                return 1;
            }else{
                return 0;
            }
        }

        public function cerca_iscrizioni(){
            $user=User::find(session('user_id'));
            $user_id=$user->id;
            $result=DB::select("select * from corsi where id in(select corso from iscrizioni where user='$user_id');");
            
            return $result;
        }

        public function unsub(Request $request){
            $id=$request->id;
            $corso=Corso::find($id);
            $user=User::find(session('user_id'));
            try{
                $corso->users()->detach($user);
            }catch(\Illuminate\Database\QueryException $exception){
                return $exception->getMessage();
            }
            return 1;
        }

        public function cerca_esercizio(Request $request){
            $nome=$request->titolo;
            $eser=Esercizio::where('nome',$nome)->first();
            return response()->json($eser);
        }

        public function scheda(Request $request){
            $nome_scheda=$request->nome;
            $num_serie=$request->num_serie;
            $num_rep=$request->num_rep;
            $eser=$request->eser;
            $user=User::find(session('user_id'));

            try{
                $user->scheda()->attach($eser,['nome_scheda'=>$nome_scheda , 'n_serie'=>$num_serie , 'n_rep'=>$num_rep ]);
            }catch(\Illuminate\Database\QueryException $exception){
                return $exception->getMessage();
            }
            return 1;
        }

        public function cerca_scheda(){
            $user=User::find(session('user_id'));
            $schede=$user->scheda;
            return response()->json($schede);
        }



        public function elimina_scheda(Request $request){
            $nome=$request->nome_scheda;
            $user=User::find(session('user_id'));
            try{
                $user->scheda()->wherePivot('nome_scheda',$nome)->detach();
            }catch(\Illuminate\Database\QueryException $exception){
                return $exception->getMessage();
            }
            return 1;

        }

    }