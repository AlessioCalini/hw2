<?php
?>
<html>
    <head>
    <link rel='stylesheet' href='{{ asset('css/signup.css') }}'>
        <script src='{{ asset('js/signup.js') }}'defer></script>
        <script type="text/javascript">
            const CHECK_USER = "{{route('check_user')}}";   
        </script>
        <script type="text/javascript">
            const CSFR_TOKEN = '{{ csrf_token() }}';
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{{ asset('immagini/logo.png') }}">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Syne+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <title>FitnessCenter-Iscriviti</title>
    </head>
    <body>
        <div id='overlay'></div>
        <main>
            <div id='header'>
                <img src="{{ asset('immagini/logo.png') }}">
                <h1>Iscriviti</h1>
            </div>
            <form name='nome_form' id='form' method='post' action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
                <p>
                    <input type='text' name='name' placeholder='nome'>
                </p>
                <p>
                    <input type='text' name='surname' placeholder='cognome'>
                </p>
                <p>
                    <input type='text' name='email' placeholder='email@domain.ext'>
                </p>
                <p>
                    <input type='text' name='username' placeholder='username'> 
                </p>
                <p>
                    <input type='password' name='password' placeholder='password'>
                </p>
                <p>
                    <input type='password' name='passwordDue' placeholder='conferma password'>
                </p>
                <p>
                    <input name='try' type='submit' class='btn' value='Registrati!'>
                </p>
            </form>
 
        </main>
        <div id='login'>
                <a href="{{ route('login') }}">Sei già membro?</a>
            </div>
    </body>
</html>