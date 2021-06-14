<html>
    <head>
        <link rel='stylesheet' href='{{ asset('css/sezione_per.css') }}'>
        <script src='{{ asset('js/sezione_per.js') }}' defer="true"></script>
        <script type="text/javascript">
            const EXE_M_ROUTE = "{{route('exe_img')}}";   
        </script>
        <script type="text/javascript">
            const EXE_ROUTE = "{{route('exercise')}}";   
        </script>
        <script type="text/javascript">
            const CHECK_EXE_ROUTE = "{{route('check_exercise')}}";   
        </script>
        <script type="text/javascript">
            const INS_EXE_ROUTE = "{{route('ins_exe')}}";   
        </script>
        <script type="text/javascript">
            const CER_SUB_ROUTE = "{{route('cerca_iscrizioni')}}";   
        </script>
        <script type="text/javascript">
            const UNSUB_ROUTE = "{{route('unsub')}}";   
        </script>
        <script type="text/javascript">
            const CER_EXE_ROUTE = "{{route('cerca_esercizio')}}";   
        </script>
        <script type="text/javascript">
            const SCH_ROUTE = "{{route('scheda')}}";   
        </script>
        <script type="text/javascript">
            const CER_SCH_ROUTE = "{{route('cerca_scheda')}}";   
        </script>
        <script type="text/javascript">
            const DEL_SCH_ROUTE = "{{route('elimina_scheda')}}";   
        </script>
        <script type="text/javascript">
            const CSFR_TOKEN = '{{ csrf_token() }}';
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('immagini/logo.png') }}">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Syne+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <title>FitnessCenter-Account</title>
    </head>
    <body>

       <header>
           <nav>
               <div id='logo'>
                   <img src="{{ asset('immagini/logo.png') }}">
                   Fitness Center
               </div>
               <div id='links'>
               <a href="{{ route('home') }}" class='button'>Home</a>
                <a href="{{ route('logout') }}" class='button'>Logout</a>
                <a href="{{ route('corsi') }}" class='button'>Corsi</a>
                <a href="{{route('sezione_per') }}" class='button'>Account</a>
               </div>
               <div id='menu'>
                <div></div>
                <div></div>
                <div></div>
            </div>
           </nav>
       </header>
       <main class='all'>
       <main class='account'>
        <section id='profile'>
            <div class='avatar'>
                @if($user['propic']==null)
                    <img src="{{ asset('immagini/default_avatar.png') }}">
                    <div id='foto'>
                <form name='nome_form' id='form' method="post" action="{{ route('carica_foto') }}" enctype="multipart/form-data">
                @csrf
                    <input type='file' name='avatar' id='fileToUpload'>
                    <input name='submit' type="submit" class='btn' value='Carica'>
                </form>
                </div>
                @endif
                @if($user['propic'])
                    <img src="{{asset('uploads/'.$user['propic'] ) }}">
                @endif
            </div>

            <div class='name'>
                {{ $user['name'] }} {{ $user['surname'] }}
            </div>
            <div class="username">
                {{ '@'.$user['username'] }}
            </div>
            <div class='stats'>
                <div>
                    <span class='count'>{{ $user['nCorsi'] }}</span><br>Corsi Frequentati
                </div>
            </div>
        </section>
        </main>
        
        <main class='corso'>
            <article id='view'>
            <section class='genre' id='corsi'>
                <div class='frequentati'>
                    <h1>Corsi Frequentati</h1>
                    <img src="{{ asset('immagini/d_icon.png') }}" id='icon' data-cod='1'> 
                </div>
                <div id ='cor' class='show-case, hidden'></div>
            </section>
            <section class='genre' id='scheda'>
                <div class='allenamenti'>
                    <h1>Prepara la tua scheda</h1>
                    <img src="{{ asset('immagini/d_icon.png') }}" id='icon2' data-cod='1'> 
                </div>
                <div id='exe' class='hidden'>
                       <p>
                           Nome della scheda <input type='text' placeholder="Nome" id='schedule'>
                       </p> 
                       <p>
                            Ricerca gli esercizi da aggiungere<input type="text" placeholder="Esercizio" id="search">
                            <div class='btn' id='cerca'>Cerca</div>
                       </p>
                       <div id ='exer' class='show-case'></div>
                </div>
            </section>
            <section class='genre' id='schede_pronte'>
                <div class='schede_p'>
                    <h3>Le mie schede</h3>
                    <img src="{{ asset('immagini/d_icon.png') }}" id='icon3' data-cod='1'>
                </div>
                <div id='scp' class="hidden"></div>
            </section>
            </article> 
        </main>
       </main>
       <footer>
        <div>
            <address>Corso Italia n.52 Catania(Calini Alessio O46001993)</address>
            <h1>Social</h1>
            <div id="social">
                <div>
                    <img src="{{ asset('immagini/instagram-icon-14-256.png') }}">
                    <p>@Fitness_Center</p>
                </div>
                <div>
                    <img src="{{ asset('immagini/facebook-icon-14-256.png') }}">
                    <p>Fitness Center</p>
                </div>
                <div>
                    <img src="{{ asset('immagini/twitter-icon-14-256.png') }}">
                    <p>@PalestraFitnessCenter</p>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>