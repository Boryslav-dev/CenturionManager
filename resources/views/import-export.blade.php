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

                <div class="header__menu header-user">
                    <div class="header-user__name">
                        user_name
                    </div>
                    <div class="header-user__img">
                        <img src="{{ asset('media/img/user.svg') }}" alt="User">
                        <div class="header-user__dropdown header-dropdown">
                            <div class="header-user__hover-helper"></div>
                            <ul class="header-dropdown__list">
                                <li class="header-dropdown__item">
                                    <a href="#">User Settings</a>
                                </li>
                                <li class="header-dropdown__item">
                                    <a href="#">Import/Export</a>
                                </li>
                                <li class="header-dropdown__item">
                                    <a href="#">Categories</a>
                                </li>
                                <li class="header-dropdown__item">
                                    <a href="#">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="import-export">
        <div class="container">
            <h1 class="title">Import/Export</h1>
            <div class="import-export__wrapper">
                <div class="import-export__items">
                    <form class="import-export__import-form data-form">
                        <p class="data-form__title">Import</p>
                        <div class="data-form__info">
                            <div class="data-form__info-item">
                                <p class="data-from__info-title">
                                    Records
                                </p>
                                <p class="data-from__info-value">
                                    -
                                </p>
                            </div>
                            <div class="data-form__info-item">
                                <p class="data-from__info-title">
                                    Categories
                                </p>
                                <p class="data-from__info-value">
                                    -
                                </p>
                            </div>
                        </div>
                        <div class="data-form__controls">
                            <button class="button">Import</button>
                            <button class="button" disabled>Apply</button>
                        </div>
                    </form>
                    <form class="import-export__import-form data-form">
                        <p class="data-form__title">Export</p>
                        <div class="data-form__info">
                            <div class="data-form__info-item">
                                <p class="data-from__info-title">
                                    Records
                                </p>
                                <p class="data-from__info-value">
                                    200
                                </p>
                            </div>
                            <div class="data-form__info-item">
                                <p class="data-from__info-title">
                                    Categories
                                </p>
                                <p class="data-from__info-value">
                                    8
                                </p>
                            </div>
                        </div>
                        <div class="data-form__controls">
                            <button class="button">Export</button>
                        </div>
                    </form>
                </div>
                <aside class="settings-aside">
                    <a href="#" class="settings-aside__tab">
                        <p>User settings</p>
                    </a>
                    <a href="#" class="settings-aside__tab active">
                        <p>Import/Export</p>
                    </a>
                    <a href="#" class="settings-aside__tab">
                        <p>Categories</p>
                    </a>
                </aside>
            </div>
        </div>
    </section>
</body>

</html>
