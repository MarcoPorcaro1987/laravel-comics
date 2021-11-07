<footer class="foot-cont">
    <div class="foot-top">
        <div class="container info-cont">
            <div class="info">
                <p>{{$navFooter['nav1']['title']}}</p>
                <ul>
                    @foreach ($navFooter['nav1']['links'] as $link)
                    <li>
                        <a href="#">{{ $link }}</a>
                    </li>
                    @endforeach
                </ul>
                <p>{{$navFooter['nav2']['title']}}</p>
                <ul>
                    @foreach ($navFooter['nav2']['links'] as $link)
                    <li>
                        <a href="#">{{ $link }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="info">
                <p>{{$navFooter['nav3']['title']}}</p>
                <ul>
                    @foreach ($navFooter['nav3']['links'] as $link)
                    <li>
                        <a href="#">{{ $link }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="info">
                <p>{{$navFooter['nav3']['title']}}</p>
                <ul>
                    @foreach ($navFooter['nav4']['links'] as $link)
                    <li>
                        <a href="#">{{ $link }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="logo-bg-cont">
                <img src="../../images/dc-logo-bg.png" alt="" />
            </div>
        </div>
    </div>
    <div class="foot-bottom">
        <div class="container foot-btm-cont">
            <div class="btn-sign-up">SIGN-UP NOW!</div>
            <div class="social-cont">
                <p class="">FOLLOW US</p>
                <div class="social">
                    @foreach ($navFooter['socials'] as $social)
                    <a href="#"
                        ><img
                        src="../images/{{ $social }}" 
                        alt="{{ $social }}"
                    /></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>