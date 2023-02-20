<header>
    <div class="container-fluid cnt-header p-0">
        <div class="container-fluid w-100 cont-blue-header">
            <div class="row justify-content-end">
                <div class="col-2 text-end p-2">
                    <p class="m-0">DC POWER VISA</p> </div>
                <div class="col-2 text-end p-2">
                    <p class="m-0 ">ADDITIONAL DC SITES<i class="fa-solid fa-sort-down ms-2"></i></p> 
                </div>
            </div>
        </div>
        <div class="row row-header-menu">
            <div class="col-2">
                <div class="logo">
                    <img class="image-logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC-logo">
                </div>
            </div>
            <div class="col-9">
                <div class="menu-bar">
                    <ul class="m-0">
                        @foreach ($menu as $key => $item )
                        <li>
                            <a class="{{ Route::currentRouteName() == $key ? 'active' : ''}}" href="#">{{ $key }}</a>
                        </li>
                        @endforeach
                        <li class="li-input">
                            <input type="text" placeholder="search">
                        </li>
                    </ul>
                </div>
            </div>
        </div> 
    </div>
    <div class="jumbotron"></div>
</header>