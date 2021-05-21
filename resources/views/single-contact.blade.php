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

    <section class="single-contact">
        <div class="container">
            <h1 class="title">Contact view</h1>
            <form class="single-contact__form">
                <div class="single-contact__wrapper">
                    <div class="single-contact__left-column">
                        <div class="single-contact__img">
                            <img src="{{ asset('media/img/user.svg') }}" alt="Photo">
                        </div>
                        <div class="single-contact__upload-wrapper">
                            <input type="file" class="single-contact__upload-input">
                            <div class="button">Upload photo</div>
                        </div>
                    </div>
                    <div class="single-contact__right-column">
                        <div class="single-contact__right-section">
                            <p class="title">Main info</p>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Name
                                    </p>
                                </div>
                                <input class="single-contact__input" type="text" value="Petro Bondarchuk" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Main contact
                                    </p>
                                </div>
                                <input class="single-contact__input" type="text" value="+38056754334" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                        </div>
                        <div class="single-contact__right-section">
                            <p class="title">Custom info</p>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Custom info
                                    </p>
                                    <div class="single-contact__delete-field">

                                    </div>
                                </div>
                                <input class="single-contact__input" type="text" value="Custom info" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Custom info
                                    </p>
                                    <div class="single-contact__delete-field">

                                    </div>
                                </div>
                                <input class="single-contact__input" type="text" value="Custom info" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Custom info
                                    </p>
                                    <div class="single-contact__delete-field">

                                    </div>
                                </div>
                                <input class="single-contact__input" type="text" value="Custom info" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Custom info
                                    </p>
                                    <div class="single-contact__delete-field">

                                    </div>
                                </div>
                                <input class="single-contact__input" type="text" value="Custom info" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Custom info
                                    </p>
                                    <div class="single-contact__delete-field">

                                    </div>
                                </div>
                                <input class="single-contact__input" type="text" value="Custom info" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Custom info
                                    </p>
                                    <div class="single-contact__delete-field">

                                    </div>
                                </div>
                                <input class="single-contact__input" type="text" value="Custom info" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Custom info
                                    </p>
                                    <div class="single-contact__delete-field">

                                    </div>
                                </div>
                                <input class="single-contact__input" type="text" value="Custom info" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Custom info
                                    </p>
                                    <div class="single-contact__delete-field">

                                    </div>
                                </div>
                                <input class="single-contact__input" type="text" value="Custom info" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Custom info
                                    </p>
                                    <div class="single-contact__delete-field">

                                    </div>
                                </div>
                                <input class="single-contact__input" type="text" value="Custom info" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                            <div class="single-contact__input-wrapper">
                                <div class="single-contact__input-text">
                                    <p>
                                        Custom info
                                    </p>
                                    <div class="single-contact__delete-field">

                                    </div>
                                </div>
                                <input class="single-contact__input" type="text" value="Custom info" readonly>
                                <div class="single-contact__edit">
                                    <img src="{{ asset('media/img/edit.svg') }}" alt="Edit">
                                </div>
                            </div>
                        </div>
                        <div class="single-contact__right-section">
                            <p class="title">Tags</p>
                            <div class="single-contact__tags-wrapper">
                                <input class="single-contact__tag" value="Telephone" readonly>
                                <select class="single-contact__tag-select">
                                    <option value="Telegram">Telegram</option>
                                    <option value="Viber">Viber</option>
                                    <option value="Telephone">Telephone</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-contact__form-controls">
                    <div class="sticky-wrapper">
                        <button class="button single-contact__save">Save</button>
                        <button class="button single-contact__delete">Delete</button>
                        <button class="button">Add custom field</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
