<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Parduotuve</title>
    {{--<title>{{ config('app.name', 'Pradinis') }}</title>--}}
    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>
<body>
    <header>
            <div class="main">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('arch.png') }}">
                    </a>
                </div>

                <div class='block'>
                    <div class='blockedBlock'>
                        <div class="toolbar">
                            <ul>
                                <li class="contacts">
                                    <ul>
                                        <li>
                                            <a href="{{ route('contacts') }}">Kontaktai</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}">Apie mus</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('itemReclaim') }}">Kaip pirkti?</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="formBar">
                                    <ul>
                                        @if (Auth::check())
                                        <li>
                                            <a href="{{ url('/user') }}">
                                                Profile
                                            </a>
                                        </li>
                                        <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                        @else
                                        <li>
                                            <a href="{{ url('/login') }}">
                                                Login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/register') }}">
                                                Register
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="searchbar">
                            <input type="text" placeholder="search">
                            <button class="btn">Ieškoti</button>
                        </div>
                    </div>
                </div>

                <div class="price1Sum">
                    <a href="{{--route('cart.index')--}}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> (
                        <span class="cartItems">
                            0{{--Helpers::cartCount(csrf_token())--}}
                        </span>
                        )  – 
                        <small>
                            <span class="cartAmount">
                               0{{--Helpers::cartSum(csrf_token())--}}
                            </span>
                              €
                        </small>
                    </a>
                </div>

            </div>
        </header>
        <main>
            <aside class="leftMenu">
                <nav  class="clickBait">
                     <ul>
                        <li class="btn-success"><a href="#">Akcijos</a></li>
                        <li class="btn-info"><a href="#">Rekomenduojame</a></li>
                        <li class="btn-success"><a href="#">Ispardavimas</a></li>
                        <li class="btn-info"><a href="#">Naujausios prekes</a></li>
                        <li class="btn-success"><a href="#">Dovanu idejos</a></li>
                     </ul>
                 </nav>
                 <nav class="shopMenu">
                     <ul>
                        <li class="btn-primary"><a href="#">Kompiuteriu komponenetai</a></li>
                        <li class="btn-warning"><a href="#">Biuro iranga ir pan s</a></li>
                        <li class="btn-primary"><a href="#">Buitine technika</a></li>
                        <li class="btn-warning"><a href="#">Audio, video, foto</a></li>
                        <li class="btn-primary"><a href="#">Namu ukiui</a></li>
                        <li class="btn-warning"><a href="#">Zaidimai</a></li>
                        <li class="btn-primary"><a href="#">Auto ukiui</a></li>
                     </ul>
                 </nav>
                 <div class="questionBox">
                    <div class="panel panel-default">
                        <p class='panel-heading'>Ka galetumet psiulyti is UI puses?</p>
                        <div class='panel-body'>
                            <textarea rows="6" placeholder="Trūksta 22b"></textarea>
                            <button class='btn'>Submit</button>
                        </div>
                    </div>
                 </div>

            </aside>

            @yield('content')

        </main>
        <footer>
            <pre>
                Visos teisės saugomos. Tai yra Eivydo Petylos sablonas, viskas nupirkta sioje parduotuveje neegzistuoja, bet pinigus mielai paimsiu ;).
                Bet kokios informacijos platinimas be raštiško sutikimo draudžiamas.

                Visos kainos nurodytos su 21% PVM mokesčiu.
            </pre>
        </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
