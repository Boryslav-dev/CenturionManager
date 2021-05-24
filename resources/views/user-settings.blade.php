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

    <section class="user-settings">
        <div class="container">
            <h1 class="title">User settings</h1>
            <div class="user-settings__wrapper">
                <div class="user-settings__form">
                    <div class="user-settings__left-column">
                        <div class="user-settings__img">
                            <img src="{{ asset('media/img/user.svg') }}" alt="User">
                        </div>
                        <div class="user-settings__upload-wrapper">
                            <input type="file" class="user-settings__upload-input">
                            <div class="button">Upload photo</div>
                        </div>
                    </div>
                    <div class="user-settings__right-column">
                        <div class="user-settings__input-wrapper">
                            <div class="user-settings__input-text">
                                <p>
                                    User login
                                </p>
                            </div>
                            <input class="user-settings__input" type="text" value="user_login" readonly>
                            <div class="user-settings__edit">
                                <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                            </div>
                        </div>
                        <div class="user-settings__input-wrapper">
                            <div class="user-settings__input-text">
                                <p>
                                    User email
                                </p>
                            </div>
                            <input class="user-settings__input" type="text" value="user.email@gmail.com" readonly>
                            <div class="user-settings__edit">
                                <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                            </div>
                        </div>
                        <div class="user-settings__input-wrapper">
                            <div class="user-settings__input-text">
                                <p>
                                    User password
                                </p>
                            </div>
                            <input class="user-settings__input" type="password" value="password" readonly>
                            <div class="user-settings__edit">
                                <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="settings-aside">
                    <a href="#" class="settings-aside__tab active">
                        <p>User settings</p>
                    </a>
                    <a href="#" class="settings-aside__tab">
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
