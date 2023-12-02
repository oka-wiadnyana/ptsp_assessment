<div class="topbar">
    <div class="logo">
        <h1>
            <a href="#" title="">
                <img src="{{ asset('img') }}/logo-text.png" alt="" width="80rem" />
            </a>
        </h1>
    </div>
    <div class="topbar-data">
        <div class="usr-act">
            <i>HELLO, {{ Str::upper(auth()->user()->name) }}</i>
            <span>
                <img src="{{ asset('img') }}/no-profil.png" alt="" width="50rem"/>
                <i class="sts away"></i>
            </span>
            <div class="usr-inf">
                <div class="usr-thmb brd-rd50">
                    <img class="brd-rd50" src="{{ asset('img') }}/no-profil.png" alt="" width="80rem"/>
                    <i class="sts away"></i>
                    <a class="green-bg brd-rd5" href="#" title="">
                        <i class="fa fa-user"></i>
                    </a>
                </div>
                <h5>
                    <a href="{{ url('/') }}" title="">{{ Str::upper(auth()->user()->name) }}</a>
                </h5>
               
                <div class="act-pst-lk-stm">
                 
                </div>
                
            </div>
        </div>
        <form class="topbar-search">
        
        </form>
        <ul class="tobar-links">
           
        </ul>
    </div>
    <div class="topbar-bottom-colors">
        <i style="background-color: #2c3e50;"></i>
        <i style="background-color: #9857b2;"></i>
        <i style="background-color: #2c81ba;"></i>
        <i style="background-color: #5dc12e;"></i>
        <i style="background-color: #feb506;"></i>
        <i style="background-color: #e17c21;"></i>
        <i style="background-color: #bc382a;"></i>
    </div>
</div>