<footer>
    <div class="container-1000">

        <div class="footer-left">

            <div class="row">

                @foreach ($footerLinks as $singleFooterLink)
                <div class="col-4">
                    <ul>
                        <li><a href="{{ ($singleFooterLink['name']) }}">{{ $singleFooterLink['name'] }}</a></li>
                        
                        
                    </ul>
                </div>
                @endforeach
            </div>
        </div>


        <div class="footer-right">
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo">
        </div>

        
    </div>

    <div class="footer-bottom-background">

        <div class="container-1000">
    
            <div class="footer-bottom">
                <div class="footer-bottom-left">
                    <button type="button" class="btn bg-transparent btn-outline-primary">Sign-up Now!</button>
                </div>

                <div class="footer-bottom-right">
                    <span>Follow up</span>
                    @foreach ($footerIcons as $singleFooterIcon)
                    <img src="{{ Vite::asset('resources/img/' . $singleFooterIcon['src']) }}" alt="Logo">
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</footer>