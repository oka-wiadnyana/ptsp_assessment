
<header class="side-header expand-header">
    <div class="nav-head">Aplication
        <span class="menu-trigger">
            <i class="ion-android-menu"></i>
        </span>
    </div>
    <nav class="custom-scrollbar">
        <ul class="drp-sec">
            <li class="has-drp">
                <li>
                    <a href="{{ url('dashboard') }}" title="">
                        <i class="ion-home"></i> Dashboard</a>
                </li>
            </li>
        </ul>
         <h4>Referensi</h4>
        <ul class="drp-sec">
           
            
            <li class="has-drp">
                <a href="#" title="">
                    <i class="ion-android-settings"></i>
                    <span>Referensi</span>
                </a>
                <ul class="sb-drp">
                    <li>
                        <a href="{{ route('ref.officers') }}" title="">Petugas</a>
                    </li>
                    <li>
                        <a href="{{ route('ref.signers') }}" title="">Penandatangan Lap</a>
                    </li>
                    <li>
                        <a href="{{ route('ref.users') }}" title="">Akun</a>
                    </li>
                    
                </ul>
            </li>
            
            
        </ul>
        <h4>Result</h4>
        <ul class="drp-sec">
           
            
          
            <li>
                <a href="{{ url('admin/result') }}" title="">
                    <i class="ion-star"></i> Result</a>
            </li>
            
        </ul>

        <h4>Nav</h4>
        <ul class="drp-sec">
           
            
          
            <li>
                <a href="{{ url('logout') }}" title="">
                    <i class="ion-log-out"></i> Logout</a>
            </li>
            
        </ul>
        
    
     
    </nav>
</header>