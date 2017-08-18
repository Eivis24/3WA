@extends('layouts.app')

@section('content')

            <aside class='rightAkcijos'>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Akcijines prekes
                    </div>
                        <div class="panel-body">

                            <div class="item list-group">
                                <div>
                                    <a href="#">
                                        <p class="tittle"><b>Prekės pavadinimas</b></p>
                                        <img src="http://t06.deviantart.net/ZDtc4Dbtm7wSEuz8EL_yMigB23s=/300x200/filters:fixed_height(100,100):origin()/pre10/eaf7/th/pre/f/2017/090/4/3/mangekyo_sharingan_9_by_spock13-db46kd7.png" class="productImage">
                                    </a>
                                    <div class="price">5555,55 €</div>
                                    <div class="toCartA">
                                        <button class="btn-succe <b>ss">
                                            <span><b>I krepseli</b></span>
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="item list-group">
                                <div>
                                    <a href="#">
                                        <p class="tittle"><b>Prekės pavadinimas</b></p>
                                        <img src="http://t06.deviantart.net/ZDtc4Dbtm7wSEuz8EL_yMigB23s=/300x200/filters:fixed_height(100,100):origin()/pre10/eaf7/th/pre/f/2017/090/4/3/mangekyo_sharingan_9_by_spock13-db46kd7.png" class="productImage">
                                    </a>
                                    <div class="price">5555,55 €</div>
                                    <div class="toCartA">
                                        <button class="btn-succe <b>ss">
                                            <span><b>I krepseli</b></span>
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="item list-group">
                                <div>
                                    <a href="#">
                                        <p class="tittle"><b>Prekės pavadinimas</b></p>
                                        <img src="http://t06.deviantart.net/ZDtc4Dbtm7wSEuz8EL_yMigB23s=/300x200/filters:fixed_height(100,100):origin()/pre10/eaf7/th/pre/f/2017/090/4/3/mangekyo_sharingan_9_by_spock13-db46kd7.png" class="productImage">
                                    </a>
                                    <div class="price">5555,55 €</div>
                                    <div class="toCartA">
                                        <button class="btn-succe <b>ss">
                                    <span><b>I krepseli</b></span>
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="item list-group">
                                <div>
                                    <a href="#">
                                        <p class="tittle"><b>Prekės pavadinimas</b></p>
                                        <img src="http://t06.deviantart.net/ZDtc4Dbtm7wSEuz8EL_yMigB23s=/300x200/filters:fixed_height(100,100):origin()/pre10/eaf7/th/pre/f/2017/090/4/3/mangekyo_sharingan_9_by_spock13-db46kd7.png" class="productImage">
                                    </a>
                                    <div class="price">5555,55 €</div>
                                    <div class="toCartA">
                                        <button class="btn-succe <b>ss">
                                            <span><b>I krepseli</b></span>
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <div class="moreButton">
                            <a href="#">Daugiau...</a>
                        </div>
                        </div>

                    </div>
                </div>
            </aside>
            
            <div class="container">
                <div class="row">
                    <div class="popProducts col-lg-12">
                        <div class="row">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    Populiariausios prekes
                                </div>
                                    <div class="panel-body">
                                 <!-- for loop begining  -->
                                 {{--
                                    @foreach($items as $item)
                                    <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="{{route('item.show', $item->id)}}">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="{{$item->imageURL}}" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">{{$item->price}}+{{$item->tax}}</div>
                                            <div class="amount">Kiekis sandelyje: {{$item->inStock}}</div>
                                        </div>
                                        <div class="toCart">
                                            @component('components.cart',['id'=>$item->id]))
                                            @endcomponent
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                --}}
                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>  

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="moreButton">
                                    <a href="#">Daugiau...</a>
                                </div>
                                <!-- for loop ending after loading a changable amount of items(default 20, max is 100)  -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="newestProducts col-lg-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Naujausios prekes
                            </div>
                            <div class="panel-body">

                                <!-- for loop begining -->
                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>  

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="item list-group col-lg-3">
                                    <div>
                                        <a href="#">
                                            <p class="tittle"><b>Prekės pavadinimas</b></p>
                                            <img src="https://lh3.ggpht.com/MBuMXMJJnlIb-WkqHL__hRUmXy3fDKu3z5cqxH_cB5zJ_ewidu-aMbsX-urlF6LiFg=w300" class="productImage">
                                        </a>
                                        <div class="info1">
                                            <div class="price1">5555,55 €</div>
                                            <div class="amount">Kiekis sandelyje: 5</div>
                                        </div>
                                        <div class="toCart">
                                            <button class="btn-success">
                                                <span> <b>I krepseli</b></span>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                 <!-- for loop ending after loading a changable amount of items(default 20, max is 100) -->
                                <div class="moreButton">
                                    <a href="#">Daugiau...</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        
@endsection

<!-- 
*padaryk 'daugiau' mygtuka prie pop prekiu ir naujausiu(ateity reikes daryti viena komponnta)+

*pridek prekems(item) puslapi
    -prie prekes informacijos bus prekes aprasymas
*sukurk adminui prekiu sukurimo psl
    -adminas tures irasyti prekes aprasyma, kaina ir keiki sandelyje
*sukurk adminui prekiu administravimo psl
    -prekių(items) index puslapis
*sukurk adminui vartotoju administravimo psl
    -tiesiog vartotoju sąrašas su vartotojo adresu, užsakymų skaičiumi, viso išleista parduotuveje, klientas nuo kada, paskutinio u-sakymo data
*sukurk adminui uzsakymu administravimo psl
    -užsakymo numeri, daiktų kiekis(ir jų sarašas) bendra suma
*sukurk vartotojui profilio redagavimo psl su password reset knopke
    -
*
 -->