<html>
     <head>
        <link rel='stylesheet' href='{{ asset('css/login.css') }}'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{{ asset('immagini/logo.png') }}">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Syne+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <title>FitnessCenter-Accedi</title>
    </head>
    <body>
        @if($errors->any())
            <span class='error'>{{ $errors->first() }}</span>
        @endif
        <div id='overlay'>
        </div>
        <main>
            <div id='header'>
                <img src="{{ asset('immagini/logo.png') }}">
                <h1>Accedi</h1>
            </div>
            <form name='nome_form' id='form' method="post" action="{{ route('login') }}">
            @csrf
                <p>
                    <span>Username</span>
                        <label> <input type='text' name='username'></label>
                </p>
                <p>
                    <span>Password</span>
                        <label><input type='password' name='password'></label>
                </p>
                <p>Ricordami <input type='checkbox' name='ricorda' value='yes'></p>
                <p>
                    <label>&nbsp;<input type='submit' class='btn'></label>
                </p>
            </form>
            <div id="signup">
            <a href="{{ route('register') }}">Non sei registrato?</a>
                </div> 
        </main>
    </body>
</html>