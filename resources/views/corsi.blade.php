<html>
<head>
        <link rel='stylesheet' href='{{ asset('css/corsi.css') }}'>
        <script src='{{ asset('js/corsi.js') }}' defer="true"></script>
        <script type="text/javascript">
            const CHECK_CONT_ROUTE = "{{route('check_contenuti')}}";   
        </script>
        <script type="text/javascript">
            const FETCH_CONT_ROUTE = "{{route('fetch_contenuti')}}";   
        </script>
        <script type="text/javascript">
            const CONT_ROUTE = "{{route('contenuti')}}";   
        </script>
        <script type="text/javascript">
            const INS_ROUTE = "{{route('inserimento')}}";
        </script>
        <script type="text/javascript">
            const CERCA_ROUTE = "{{route('cerca')}}";
        </script>
        <script type="text/javascript">
            const SUB_ROUTE = "{{route('iscrizione')}}";
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
        <title>FitnessCenter</title>
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
                <a href="{{ route('sezione_per') }}" class='button'>Account</a>
               </div>
               <div id='menu'>
                <div></div>
                <div></div>
                <div></div>
            </div>
           </nav>
       </header>
       <article id="view">
            <section class="genre" id="corsi">
            <h1>Scopri i nostri corsi</h1>
            <div class="show-case"></div>
            </section>
            <section id='modal' class='hidden'>
                <div id='close_div'>
                    <img id='close' src="{{ asset('immagini/close.svg') }}">
                </div>
                <div class='modal-content'>
                </div>
                <button id='bottone' class='btn'>Iscriviti</button>
            </section>
       </article>
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