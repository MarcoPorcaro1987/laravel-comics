<header class="container head-cont">
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
</header>