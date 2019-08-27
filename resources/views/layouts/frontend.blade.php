<!DOCTYPE html>
<html>
<head>
    <title>Azmirza Mitra Informatika</title>
    <meta name="keywords" content="IT Consultant, Software Developement, Data Warehouse, Web Developement, Business Intelligence, Mobile Application">
    <meta name="description" content="Perusahaan yang bergerak dibidang teknologi informasi spesialisasi di Software Development Desktop application, Web application atau Mobile application.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel='icon' href="{{ asset ('jadi/favicon.ico')}}" type='image/x-icon' >
<link rel="stylesheet" href="{{ asset ('jadi/css/offline.css')}}">
<script src="{{ asset ('jadi/js/jquery-offline.js')}}"></script>
<script src="{{ asset ('jadi/js/offline.js')}}"></script>

<link rel='icon' href="{{ asset ('jadi/favicon.ico')}}" type='image/x-icon' >
<link rel="stylesheet" href="css/offline.css">
<script src="js/jquery-offline.js"></script>
<script src="js/offline.js"></script>

<!-- <link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style-index.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/preload-unload.css">
<link rel="stylesheet" href="css/css-modal.css">
<link rel="stylesheet" href="css/others.css"> -->

<link rel="stylesheet" href="{{ asset ('jadi/css/main.css')}}">
<link rel="stylesheet" href="{{ asset ('jadi/css/style-index.css')}}">
<link rel="stylesheet" href="{{ asset ('jadi/css/product.css')}}">
<link rel="stylesheet" href="{{ asset ('jadi/css/preload-unload.css')}}">
<link rel="stylesheet" href="{{ asset ('jadi/css/css-modal.css')}}">


<link rel="stylesheet" href="{{ asset ('jadi/css/main.css')}}">
<link rel="stylesheet" href="{{ asset ('jadi/css/style-index.css')}}">
<link rel="stylesheet" href="{{ asset ('jadi/css/style-wwd.css')}}">
<link rel="stylesheet" href="{{ asset ('jadi/css/preload-unload.css')}}">

<!--untuk animasi Cube-->
<link rel="stylesheet" href="{{ asset ('jadi/css/cube.css')}}">
<link rel="stylesheet" href="{{ asset ('jadi/css/border-anim.css')}}">

<!--Untuk animasi Bulat saja-->
<link rel="stylesheet" href="{{ asset ('jadi/css/opening-bulat.css')}}">

<link rel='icon' href="{{ asset ('jadi/favicon.ico')}}" type='image/x-icon' >
<link rel="stylesheet" href="{{ asset ('jadi/css/offline.css')}}">
<script src="{{ asset ('jadi/js/jquery-offline.js')}}"></script>
<script src="{{ asset ('jadi/js/offline.js')}}"></script>


<link rel='icon' href="{{ asset ('jadi/favicon.ico')}}" type='image/x-icon' >
<link rel="stylesheet" href="{{ asset('jadi/css/offline.css')}}">
<script src="{{ asset('jadi/js/jquery-offline.js')}}"></script>
<script src="{{ asset('jadi/js/jquery-ui-offline.js')}}"></script>
<script src="{{ asset('jadi/js/offline.js')}}"></script>

	
<!-- css -->
<link rel="stylesheet" href="{{ asset('jadi/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('jadi/css/style-index.css')}}">
<link rel="stylesheet" href="{{ asset('jadi/css/product.css')}}">
<link rel="stylesheet" href="{{ asset('jadi/css/preload-unload.css')}}">
<link rel="stylesheet" href="{{ asset('jadi/css/css-modal.css')}}">
<link rel="stylesheet" href="{{ asset('jadi/css/contact.css')}}">

</head>
<body class="bg-untuk-index">
    <!--untuk fadein fadeout semua page-->
    <div id="unload-abu"></div>
    <!--untuk awal awal agar gelap, dan bisa fadein Loader-wrapper-->
    <div class="preload-abu-index"></div>
    <!--untuk Animasi Starting (Preload)-->
    <div id="loader-wrapper">
        <!--animasi kanan kiri & sekalian warna background animasi-->
        <div class="loader-section"></div>
        <div class="bounce-kotak">
            <div class="bounce-in-top" >A</div>
            <div class="bounce-in-top2">M</div>
            <div class="bounce-in-top3">I</div>
        </div>
        <div class="fadeout-putih">
        </div>      
    </div>
    <!--akhir untuk animasi Starting-->
    
    <div id="content">
      @include('partials.headerfrontend')

      @include('partials.nav')

      @yield('content')
    </div>

<!--untuk dijalankannya animasi atau tidak (INGAT UNTUK DIGANTI KALAU GANTI DOMAIN)-->
<script>
if (
    document.referrer == "http://azmirza.com/index.html"    ||
    document.referrer == "http://azmirza.com"               ||
    document.referrer == "http://azmirza.com/product.html"  || 
    document.referrer == "http://azmirza.com/contact.html"  ||
    document.referrer == "http://azmirza.com/others.html"   
    ) {
        $('#loader-wrapper').fadeOut(0, function(){ $('#loader-wrapper').remove(); } );
    //alert("Hello! I am an alert box!!");
}    
</script>

<!--untuk animasi Fadeout di akhir yang putih-->
<script>
setTimeout(function(){
        $('.fadeout-putih').hide()
    }, 0);

setTimeout(function(){
        $('.fadeout-putih').show()
        $('.fadeout-putih').addClass('fullscreen');
    }, 3200);

setTimeout(function(){
        $('.bounce-in-top').addClass('roll-out-left');
        $('.bounce-in-top2').addClass('rotate-out-center');
        $('.bounce-in-top3').addClass('roll-out-right');
    }, 2600);

setTimeout(function() {
$('#loader-wrapper').fadeOut(800, function(){ $('#loader-wrapper').remove(); } );
}, 3400);
</script>

<script>
setTimeout(function() {
$('.preload-abu-index').fadeOut(800, function(){ $('.preload-abu-index').remove(); } );
}, 300);
</script>

<!--untuk Animasi Fadein dari loader-->
<script>
setTimeout(function() {
$('#loader-wrapper').hide();
}, 0);

setTimeout(function() {
document.getElementById('loader-wrapper').style.zIndex = 1005;
$('#loader-wrapper').fadeIn(500);
}, 000);
</script>

<!--untuk Animasi Fadeout-->
<script>
setTimeout(function() {
$('.spinner-wrapper').fadeOut(1000, function(){ $('.spinner-wrapper').remove(); } );
}, 3400);

setTimeout(function() {
$('.cube').fadeOut(300, function(){ $('.cube').remove(); } );
}, 6000);
</script>

<!--untuk kotak dummy awal-->
<script>
setTimeout(function() {
$('.box').hide();
}, 1250);
</script>

<script src="{{ asset ('jadi/js/main.js')}}"></script>
<script src="{{ asset ('jadi/js/main.js')}}"></script>
<script src="{{ asset ('jadi/js/dragscroll.js')}}"></script>

<script src="{{ asset ('jadi/js/jquery-ui-offline.js')}}"></script>
<script src="{{ asset ('jadi/js/main.js')}}"></script>
<script src="{{ asset ('jadi/js/dragscroll.js')}}"></script>
<script></script>
</body>
</html>