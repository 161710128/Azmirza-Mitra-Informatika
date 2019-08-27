@extends('layouts.frontendothers')
@section('content')
<header>
            <div class="header-logo">
                <a class="site-logo" href="jadi" id="link" onclick="goURL(this.href);return false">
                    <img src="{{ asset ('jadi/images/brand.png')}}" alt="Homepage" title="AMI | commit to be better">
                </a>
            </div>

            <h2 class="nama-perusahaan">AZMIRZA MITRA INFORMATIKA</h2>
            <h2 class="nama-perusahaan margin-atas-min-10"><span>Commit to be Better</span></h2>

            <nav role='navigation'>
                <div id="menuToggle">
                    <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>

                    <ul id="menu">
                        <li><a href="{{route ('product')}}" id="link5" onclick="goURL(this.href);return false">Product</a></li>
                        <li><a href="{{route ('contact')}}" id="link6" onclick="goURL(this.href);return false">Contact Us</a></li>
                        <li><a href="{{route ('others')}}" id="link7" onclick="goURL(this.href);return false">Others</a></li>
                    </ul>
                </div>
            </nav>

                <!-- <div style="position: fixed; padding-right: 1000px">untuk Logo</div> -->       
</header>

<nav>
    <a href="{{route ('product')}}" class="menu10 button1 effect-1 sub-b" id="link2" onclick="goURL(this.href);return false"><p>Product</p></a> <br>
    <a href="{{route ('contact')}}" class="menu11 button1 effect-1 sub-b" id="link3" onclick="goURL(this.href);return false"><p>Contact Us</p></a> <br>
    <a href="{{route ('others')}}" class="menu12-kuning button1 effect-1 sub-b disable" id="link4" onclick="goURL(this.href);return false"><p>Others</p></a> <br>
</nav>

<main>
    <!--<div class='rotate-box'>
    <div class="rotate-box-body">
        <div class="rotate">UNDER MAINTENANCE</div>
    </div>
    </div>-->
</main>

<script>
setTimeout(function() {
$('.preload-abu').fadeOut(800, function(){ $('.preload-abu').remove(); } );
}, 300);
</script>

<script>
$('.panel-heading a').click(function() {
    $('.panel-heading').removeClass('active');
    $('.panel-title').removeClass('active');
    
    //If the panel was open and would be closed by this click, do not active it
    if(!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))
        
        $(this).parents('.panel-title').addClass('active'); 
 });
</script>

<script src="js/main.js"></script>
<!-- END javascript -->
@endsection