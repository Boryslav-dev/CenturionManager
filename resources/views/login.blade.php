<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Centurion Manager</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo logo">
                    <img src="{{ asset('media/img/logo--white.svg') }}" alt="Centurion Manager">
                </div>

                <div class="header__menu header-login">
                    <button class="button button--link">
                        Log In
                    </button>
                    <button class="button button--small button--white">
                        Sign In
                    </button>
                </div>
            </div>
        </div>
    </header>

    <section class="auth-section">
        <form class="auth-section__form auth-form" method="post" action="{{url('api/login')}}">
            <input name="email" type="email" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <button class="button" type="submit">Log In</button>
        </form>
    </section>
</body>

</html>
