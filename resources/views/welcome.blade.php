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

    <section class="categories">
        <div class="container">
            <h1 class="title">Categories</h1>
            <div class="categories__wrapper">
                <div class="categories__items">
                    <div class="button categories__add">
                        + Add Category
                    </div>
                    <div class="categories__item category">
                        <p class="category__name">
                            Telegram
                        </p>
                        <p class="category__total">
                            Total records: <span>200</span>
                        </p>
                        <button class="button category__delete">
                            Delete
                        </button>
                    </div>
                    <div class="categories__item category">
                        <p class="category__name">
                            Viber
                        </p>
                        <p class="category__total">
                            Total records: <span>100</span>
                        </p>
                        <button class="button category__delete">
                            Delete
                        </button>
                    </div>
                    <div class="categories__item category">
                        <p class="category__name">
                            Telephone
                        </p>
                        <p class="category__total">
                            Total records: <span>20</span>
                        </p>
                        <button class="button category__delete">
                            Delete
                        </button>
                    </div>
                </div>
                <aside class="settings-aside">
                    <a href="#" class="settings-aside__tab">
                        <p>User settings</p>
                    </a>
                    <a href="#" class="settings-aside__tab">
                        <p>Import/Export</p>
                    </a>
                    <a href="#" class="settings-aside__tab active">
                        <p>Categories</p>
                    </a>
                </aside>
            </div>
        </div>
    </section>
</body>

</html>
