<?php
?>

<html>
<head>
<link rel='stylesheet' href='{{ asset('css/home.css') }}'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <title>FitnessCenter</title>
    <link rel="icon" type="image/png" href="{{ asset('immagini/logo.png') }}">
</head>
<body>

   <header>
       <div id='overlay'></div>
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
       <h1>
        <strong>Step to the next level !</strong>
       </h1>
       <div id='icon'>
           <div>
           <img src="{{ asset('immagini/hand-biceps-icon-256.png') }}">
           <h2>Strenght</h2>
           </div>
           <div>
           <img src="{{ asset('immagini/weightlift-icon-256.png') }}">
           <h2>Stretch</h2>
           </div>
           <div>
            <img src="{{ asset('immagini/regular-biking-icon-256.png') }}">
            <h2>Sweat</h2>
           </div>
           <div>
            <img src="{{ asset('immagini/shutdown-icon-256.png') }}">
            <h2>Power</h2>
           </div>
        </div>
       <h3>
        <a class='button' href="{{ route('corsi') }}">Scopri i nostri corsi</a>
       </h3>
   </header>
   <section>
       <div id='main'>
           <h1>Alimenta il tuo benessere</h1>
           <p>La palestra nei dintorni piu' completa che cerchi.</br>Struttura di 4000mq interamente climatizzata, 4 sale all'avanguardia e istruttori qualificati</p>
       </div>

       <div id='details'>
           <div>
               <img src="{{ asset('immagini/Functional.jpg') }}">
              <h1>I Corsi</h1> 
              <p>
                  Oltre la sala pesi la nostra struttura offre numerosi corsi per i nostri soci tra cui: Function training, Aerokickboxing e Spinbike.
              </p>
           </div>
           <div>
               <img src="{{ asset('immagini/sale.jpg')}}">
               <h1>Le Sale</h1>
               <p>Il nostro impianto dispone di 4 sale completamente climatizzate.</br> Ognuna di esse dispone di attrezzature moderne e di un punto di ricarica dov'è possibile caricare il proprio device in totale comodità</p>
           </div>
       </div>
       <div id='details2'>
        <div>
            <img src="{{ asset('immagini/personal-trainer-3.jpg') }}">
           <h1>Il Personale</h1> 
           <p>
               Istruttori con qualifica tecnica riconosciuta (ASI) specializzati in function training, body building e cross fit.Oltre ad un educatore alimentare che ti aiuterà con la dieta piu' adatta a te.
           </p>
        </div>
        <div>
            <img src="{{ asset('immagini/coaching-online-news-aipt.jpg') }}">
            <h1>Online Coaching</h1>
           <p>La Fitness Center permette, data l'attuale emergenza sanitaria, di seguire in live streaming i workout guidati dai nostri personal trainer</p> 
        </div>
    </div>
       </div>
   </section> 
   <footer>
    <div>
        <address>Corso Italia n.52 Catania(Alessio Calini O46001993)</address>
        <h1>Social</h1>
        <div id='social'>
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
