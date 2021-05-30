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

    <section class="contacts">
        <div class="container">
            <h1 class="title">Contacts</h1>
            <div class="contacts__wrapper">
                <div class="contacts__items contacts-list">
                    <div class="contacts-list__item contact">
                        <div class="contact__image">
                            <img src="{{ asset('media/img/user.svg') }}" alt="Contact">
                        </div>
                        <div class="contact__name">
                            <div class="contact__description">
                                <p>Name:</p>
                            </div>
                            <p>
                                Petua
                            </p>
                        </div>
                        <div class="contact__main-info">
                            <div class="contact__description">
                                <p>Contact:</p>
                            </div>
                            <p>
                                +380578573233
                            </p>
                        </div>
                        <div class="contact__tags">
                            <div class="contact__description">
                                <p>Tags:</p>
                            </div>
                            <div class="contact__tags-wrapper">
                                <p class="contact__tag">
                                    Telegram
                                </p>
                                <p class="contact__tag">
                                    Family
                                </p>
                                <p class="contact__tag">
                                    Home
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-list__item contact">
                        <div class="contact__image">
                            <img src="{{ asset('media/img/user.svg') }}" alt="Contact">
                        </div>
                        <div class="contact__name">
                            <div class="contact__description">
                                <p>Name:</p>
                            </div>
                            <p>
                                Petro Bondarchuk
                            </p>
                        </div>
                        <div class="contact__main-info">
                            <div class="contact__description">
                                <p>Contact:</p>
                            </div>
                            <p>
                                +380578573233
                            </p>
                        </div>
                        <div class="contact__tags">
                            <div class="contact__description">
                                <p>Tags:</p>
                            </div>
                            <div class="contact__tags-wrapper">
                                <p class="contact__tag">
                                    Telegram
                                </p>
                                <p class="contact__tag">
                                    Family
                                </p>
                                <p class="contact__tag">
                                    Home
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-list__item contact">
                        <div class="contact__image">
                            <img src="{{ asset('media/img/user.svg') }}" alt="Contact">
                        </div>
                        <div class="contact__name">
                            <div class="contact__description">
                                <p>Name:</p>
                            </div>
                            <p>
                                Petro Bondarchuk
                            </p>
                        </div>
                        <div class="contact__main-info">
                            <div class="contact__description">
                                <p>Contact:</p>
                            </div>
                            <p>
                                +380578573233
                            </p>
                        </div>
                        <div class="contact__tags">
                            <div class="contact__description">
                                <p>Tags:</p>
                            </div>
                            <div class="contact__tags-wrapper">
                                <p class="contact__tag">
                                    Telegram
                                </p>
                                <p class="contact__tag">
                                    Family
                                </p>
                                <p class="contact__tag">
                                    Home
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-list__item contact">
                        <div class="contact__image">
                            <img src="{{ asset('media/img/user.svg') }}" alt="Contact">
                        </div>
                        <div class="contact__name">
                            <div class="contact__description">
                                <p>Name:</p>
                            </div>
                            <p>
                                Petro Bondarchuk
                            </p>
                        </div>
                        <div class="contact__main-info">
                            <div class="contact__description">
                                <p>Contact:</p>
                            </div>
                            <p>
                                +380578573233
                            </p>
                        </div>
                        <div class="contact__tags">
                            <div class="contact__description">
                                <p>Tags:</p>
                            </div>
                            <div class="contact__tags-wrapper">
                                <p class="contact__tag">
                                    Telegram
                                </p>
                                <p class="contact__tag">
                                    Family
                                </p>
                                <p class="contact__tag">
                                    Home
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-list__item contact">
                        <div class="contact__image">
                            <img src="{{ asset('media/img/user.svg') }}" alt="Contact">
                        </div>
                        <div class="contact__name">
                            <div class="contact__description">
                                <p>Name:</p>
                            </div>
                            <p>
                                Petro Bondarchuk
                            </p>
                        </div>
                        <div class="contact__main-info">
                            <div class="contact__description">
                                <p>Contact:</p>
                            </div>
                            <p>
                                +380578573233
                            </p>
                        </div>
                        <div class="contact__tags">
                            <div class="contact__description">
                                <p>Tags:</p>
                            </div>
                            <div class="contact__tags-wrapper">
                                <p class="contact__tag">
                                    Telegram
                                </p>
                                <p class="contact__tag">
                                    Family
                                </p>
                                <p class="contact__tag">
                                    Home
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-list__item contact">
                        <div class="contact__image">
                            <img src="{{ asset('media/img/user.svg') }}" alt="Contact">
                        </div>
                        <div class="contact__name">
                            <div class="contact__description">
                                <p>Name:</p>
                            </div>
                            <p>
                                Petro Bondarchuk
                            </p>
                        </div>
                        <div class="contact__main-info">
                            <div class="contact__description">
                                <p>Contact:</p>
                            </div>
                            <p>
                                +380578573233
                            </p>
                        </div>
                        <div class="contact__tags">
                            <div class="contact__description">
                                <p>Tags:</p>
                            </div>
                            <div class="contact__tags-wrapper">
                                <p class="contact__tag">
                                    Telegram
                                </p>
                                <p class="contact__tag">
                                    Family
                                </p>
                                <p class="contact__tag">
                                    Home
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-list__item contact">
                        <div class="contact__image">
                            <img src="{{ asset('media/img/user.svg') }}" alt="Contact">
                        </div>
                        <div class="contact__name">
                            <div class="contact__description">
                                <p>Name:</p>
                            </div>
                            <p>
                                Petro Bondarchuk
                            </p>
                        </div>
                        <div class="contact__main-info">
                            <div class="contact__description">
                                <p>Contact:</p>
                            </div>
                            <p>
                                +380578573233
                            </p>
                        </div>
                        <div class="contact__tags">
                            <div class="contact__description">
                                <p>Tags:</p>
                            </div>
                            <div class="contact__tags-wrapper">
                                <p class="contact__tag">
                                    Telegram
                                </p>
                                <p class="contact__tag">
                                    Family
                                </p>
                                <p class="contact__tag">
                                    Home
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="main-aside">
                    <a href="#" class="main-aside__card aside-add">
                        <p>+ Add Contact</p>
                    </a>
                    <form class="main-aside__card aside-search">
                        <p class="title title--small center">Contact search</p>
                        <input class="aside-search__input" type="search" placeholder="Start typing...">
                        <button class="button full-width">Search</button>
                    </form>
                    <div class="main-aside__card aside-categories">
                        <p class="title title--small center">Tags list</p>
                        <div class="aside-categories__list">
                            <div class="aside-categories__item active">
                                <p>Telegram</p>
                            </div>
                            <div class="aside-categories__item active">
                                <p>Viber</p>
                            </div>
                            <div class="aside-categories__item">
                                <p>Telephone</p>
                            </div>
                            <div class="aside-categories__item">
                                <p>Skype</p>
                            </div>
                            <div class="aside-categories__item">
                                <p>Uncategorized</p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</body>

</html>
