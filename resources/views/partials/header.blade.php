<header >
    <div class="head-top">
        <div class="container head-top-cont">
            <p>DC POWER VISA</p>
            <p>ADDITIONAL DC SITES<i class="fas fa-caret-down"></i></p>
        </div>
    </div>
    <div class="container head-cont">
        <div class="head-left">
            <div class="logo-cont">
            <img src="{{asset("images/dc-logo.png")}}" alt="Logo DC" />
            </div>
        </div>
        <div class="head-right">
            <nav>
            <ul>
                @foreach ($menu as $link)
                <li>
                    <a href="{{$link["url"]}}">
                    {{$link["text"]}}</a>
                </li>
                @endforeach
            </ul>
            </nav>
        </div>
        <div class="search-bar">
            <input type="search" placeholder="Search"><a href="#"><i class="fas fa-search"></i></a>
        </div>
    </div>
</header>