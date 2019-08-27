@extends('layouts.frontendproduct')
@section('content')



<style>
        .come-in {
        transform: translateY(150px);
        animation: come-in 0.8s ease forwards;
        }
        .come-in:nth-child(odd) {
        animation-duration: 0.6s; /* So they look staggered */
        }

        @keyframes come-in {
        to { transform: translateY(0); }
        }
</style>


<header>  
    <div class="header-logo">
        <a class="site-logo" href="beranda" id="link" onclick="goURL(this.href);return false">
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
    <a href="{{route ('product')}}" class="menu10 button1 disable" id="link2" onclick="goURL(this.href);return false"><p>Product</p></a> <br>
    <a href="{{route ('contact')}}" class="menu11 button1 effect-1 sub-b" id="link3" onclick="goURL(this.href);return false"><p>Contact Us</p></a> <br>
    <a href="{{route ('others')}}" class="menu12 button1 effect-1 sub-b" id="link4" onclick="goURL(this.href);return false"><p>Others</p></a> <br>
</nav>

<main>
    <div class="dragscroll besar-sekali" id="besar-sekali">
        <button class="scroll-atas" onclick="scrollatas()">
            <span class="panah-atas"></span>
        </button>
        <button class="scroll-bawah" onclick="scrollbawah()">
            <span class="panah-bawah"></span>
        </button>

        <div class="sedang-sekali" >
            <!--UNTUK BAGIAN PRODUK-->
            <div class="title-produk"><h1>Product</h1>
                <div class="title-produk-keterangan">Click the Image for detail</div>
            </div>
            
            <div class="isi-produk">
                @foreach($products as $data)
                    <div class="kotak-produk1">
                        <div  class="produk-logo-kiri" ><input alt="Emonev" class="logo-A" id="myBtn" type="image" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}"> </div>
                        <div class="deskripsi-kanan">{!!($data->deskripsi) !!}</div> 
                    </div>
                @endforeach      
                @foreach($products2 as $data)
                    <div class="kotak-produk2">
                        <div class="produk-logo-kanan" ><input alt="ePPAS" class="logo-B" id="myBtn2" type="image" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}"> </div>
                        <div  class="deskripsi-kiri">{!!($data->deskripsi) !!} </div>        
                    </div>
                @endforeach
                @foreach($products3 as $data)
                    <div class="kotak-produk3">
                        <div  class="produk-logo-kiri" ><input alt="HRis" class="logo-A" id="myBtn3" type="image" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}"> </div>
                        <div class="deskripsi-kanan">{!!($data->deskripsi) !!}</div> 
                    </div>
                @endforeach
                @foreach($products4 as $data)
                    <div class="kotak-produk4">
                        <div class="produk-logo-kanan"><input alt="Intergrated e Planning" class="logo-B" id="myBtn4" type="image" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}"> </div>
                        <div  class="deskripsi-kiri">{!!($data->deskripsi) !!} </div>
                    </div>
                @endforeach
                @foreach($products5 as $data)
                    <div class="kotak-produk5">
                        <div  class="produk-logo-kiri"><input alt="RKPD Online" class="logo-A" id="myBtn5" type="image" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}"> </div>
                        <div class="deskripsi-kanan">{!!($data->deskripsi) !!} </div>
                    </div>
                @endforeach    
                @foreach($products6 as $data)
                    <div class="kotak-produk6">
                        <div class="produk-logo-kanan"><input alt="SunnahKami" class="logo-B" id="myBtn6" type="image" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}"> </div>
                        <div  class="deskripsi-kiri">{!!($data->deskripsi) !!} </div>
                    </div>
                @endforeach

                <!-- Ini bagian Modal dari gambar diatas--> 
                @foreach($products as $data)                   
                <div class="modal"  id="myModal">
                    <!-- Content Model -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close">&times;</span>
                            <img class="modal-gambar" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="">
                            <h3>eMonev</h3>
                        </div>
                        <div class="modal-body">
                            <!--<p>Some text in the Modal Body</p>
                            <p>Some other text...</p>-->
                            <p>{!!($data->deskripsi)!!} </p>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($products2 as $data)
                <div class="modal2" id="myModal2">
                    <!-- Content Model -->
                    <div class="modal-content2">
                        <div class="modal-header2">
                            <span class="close2">&times;</span>
                            <img class="modal-gambar" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="">
                            <h3>e-PPAS</h3>
                        </div>
                        <div class="modal-body2">
                            <p>Rancangan program prioritas dan acuan batas maksimal anggaran yang diberikan kepada Satuan Kerja Perangkat Daerah (SKPD) untuk setiap program sebagai acuan dalam penyusunan Rencana Kerja dan Anggaran SKPD (RKA-SKPD) sebelum disepakati dengan DPRD.
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($products3 as $data)
                <div class="modal3"  id="myModal3">
                    <!-- Content Model -->
                    <div class="modal-content3">
                        <div class="modal-header3">
                            <span class="close3">&times;</span>
                            <img class="modal-gambar" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="">
                            <h3>HRis</h3>
                        </div>
                        <div class="modal-body3">
                            <!--<p>Some text in the Modal Body3</p>
                            <p>Some other text...</p>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                orem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            </p>-->
                        </div>
                    </div>
                </div>  
                @endforeach                             
                @foreach($products4 as $data)
                <div class="modal4"  id="myModal4">
                    <!-- Content Model -->
                    <div class="modal-content4">
                        <div class="modal-header4">
                            <span class="close4">&times;</span>
                            <img class="modal-gambar" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="">
                            <h3>Integrated e Planning</h3>
                        </div>
                        <div class="modal-body3">
                            <p>Integrated ePlanning merupakan perpaduan aplikasi-aplikasi yang berhubungan dengan proses perencanaan pemerintah suatu daerah. Jika dilihat dari sisi aplikasi maka pada Integrated ePlanning terdapat aplikasi-aplikasi yang berhubungan dengan perencaan seperti RKPD Online, eMonev, ePPAS, ditambah dengan RPJMD Online. Integrated ePlanning merupakan solusi lengkap terhadap proses perencanaan pemerintah daerah.
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($products5 as $data)
                <div class="modal5"  id="myModal5">
                    <!-- Content Model -->
                    <div class="modal-content5">
                        <div class="modal-header5">
                            <span class="close5">&times;</span>
                            <img class="modal-gambar" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="">
                            <h3>RKPD Online</h3>
                        </div>
                        <div class="modal-body5">
                            <p>RKPD atau Rencana Kerja Pembangunan Daerah adalah proses penyusunan rencana kerja yang dilakukan oleh masing-masing pemerintah daerah di setiap wilayah Indonesia. Setiap usulan yang diajukan akan mengalami proses validasi dan verifikasi sampai akhirnya menjadi sebuah rencana kerja yang akan dijalan dalam tahun anggaran tertentu. RKPD Online adalah aplikasi RKPD berbasis online dengan platform aplikasi basis web. Dengan mengusung teknologi online diharapkan akan mengurangi keterbatasan dari sisi geografis dan waktu menjadi lebih real time.
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($products6 as $data)
                <div class="modal6"  id="myModal6">
                    <!-- Content Model -->
                    <div class="modal-content6">
                        <div class="modal-header6">
                            <span class="close6">&times;</span>
                            <img class="modal-gambar" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="">
                            <h3>SunnahKami</h3>
                        </div>
                        <div class="modal-body6">
                            <p>Adalah aplikasi berbasis android yang bersifat free dalam penggunaannya. Setiap pemakai di persilakan dengan bebas tanpa perlu membayar lisensi sepeserpun untuk menggunakannya.
                            <br>
                            Sunnah Kami dikembangkan untuk membantu kita dalam mengingatkan, mencari, atau menjadi panduan dalam menjalankan sunah-sunah yang Rasullah SAW contohkan. Dengan kata lain Sunnah Kami merupakan “Buka Saku” bagi kita dalam membantu melaksanakan sunah Rasullulah SAW.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           @endforeach
            <!--END PRODUK-->

            <!--BAGIAN WHERE WE DO-->
            <!--<div class="isi-wwd">
                <div class="title-wwd">WHERE WE DO</div>
                    
                    <div id="myGroup" >

                        <button class="collapsible">PT. Azmirza Mitra Informatika</button>
                        <div class="content-wwd">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="collapsible">PT. B</button>
                        <div class="content-wwd">
                        <input class="logo-A-wwd"   src="images/brand.png">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="collapsible">PT. C</button>
                        <div class="content-wwd">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="collapsible">PT. D</button>
                        <div class="content-wwd">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                    </div>
                </div>-->
            <!--END WHERE WE DO-->
        </div>
    </div>
</main> 

</body>

    <script>
        setTimeout(function() {
        $('.preload-abu').fadeOut(800, function(){ $('.preload-abu').remove(); } );
        }, 300);

    </script>


    <!-- UNTUK MODALS -->
    <script>
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        //   if (event.target == modal) {
        //     modal.style.display = "none";
        //   }
        // }

        // Get the modal
        var modal2 = document.getElementById("myModal2");

        // Get the button that opens the modal
        var btn2 = document.getElementById("myBtn2");

        // Get the <span> element that closes the modal
        var span2 = document.getElementsByClassName("close2")[0];

        // When the user clicks the button, open the modal 
        btn2.onclick = function() {
        modal2.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span2.onclick = function() {
        modal2.style.display = "none";
        }

        // Get the modal
        var modal3 = document.getElementById("myModal3");

        // Get the button that opens the modal
        var btn3 = document.getElementById("myBtn3");

        // Get the <span> element that closes the modal
        var span3 = document.getElementsByClassName("close3")[0];

        // When the user clicks the button, open the modal 
        btn3.onclick = function() {
        modal3.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span3.onclick = function() {
        modal3.style.display = "none";
        }

        // Get the modal
        var modal4 = document.getElementById("myModal4");

        // Get the button that opens the modal
        var btn4 = document.getElementById("myBtn4");

        // Get the <span> element that closes the modal
        var span4 = document.getElementsByClassName("close4")[0];

        // When the user clicks the button, open the modal 
        btn4.onclick = function() {
        modal4.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span4.onclick = function() {
        modal4.style.display = "none";
        }

        // Get the modal
        var modal5 = document.getElementById("myModal5");

        // Get the button that opens the modal
        var btn5 = document.getElementById("myBtn5");

        // Get the <span> element that closes the modal
        var span5 = document.getElementsByClassName("close5")[0];

        // When the user clicks the button, open the modal 
        btn5.onclick = function() {
        modal5.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span5.onclick = function() {
        modal5.style.display = "none";
        }

        // Get the modal
        var modal6 = document.getElementById("myModal6");

        // Get the button that opens the modal
        var btn6 = document.getElementById("myBtn6");

        // Get the <span> element that closes the modal
        var span6 = document.getElementsByClassName("close6")[0];

        // When the user clicks the button, open the modal 
        btn6.onclick = function() {
        modal6.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span6.onclick = function() {
        modal6.style.display = "none";
        }

    </script>

        <!--Untuk Accordion agar hanya nyala 1 dalam 1 waktu-->

    <script>
        $(document).ready(function() {
            $( '#myGroup' ).accordion({
            active: false,
            heightStyle: "content",
            collapsible: true
            });
        })
    </script>

        <!--
        <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            
            /*
            if (content.style.maxHeight){
            content.style.maxHeight = null;
            } else {
            content.style.maxHeight = content.scrollHeight + "px";
            }
            */

        });
        }
        </script>
        -->

        <!--Script untuk Scroll atas bawah dengan Button-->
        <script>
            function scrollatas() {
            var elmnt = document.getElementById("besar-sekali");
            /*elmnt.scrollLeft += -50;*/
            elmnt.scrollTop += -120;
            }

            function scrollbawah() {
            var elmnt = document.getElementById("besar-sekali");
            elmnt.scrollTop += 120;
            }
        </script>

        <!--Untuk Animasi Content Fadein saat Scroll-->

        <script>
            setTimeout(function() {
                $('.kotak-produk1').addClass('keatas');
            }, 650); // time animation should take


            setTimeout(function() {
                $('.kotak-produk2').addClass('keatas');
            }, 1050);

            setTimeout(function() {
                $('.kotak-produk3').addClass('keatas');
            }, 1450);

            $('#besar-sekali').scroll(function() {
                if ($(this).scrollTop()>260) {
                    $('.kotak-produk4').addClass('keatas');

                    if($(this).scrollTop()>440) {
                        $('.kotak-produk5').addClass('keatas');

                        if($(this).scrollTop()>620) {
                        $('.kotak-produk6').addClass('keatas');
                        /*$('#header-small2').fadeIn(700);*/
                        }
                    }
                } 
            });
        </script>

        <!--
        <script>
            (function($) {

        /**
        * Copyright 2012, Digital Fusion
        * Licensed under the MIT license.
        * http://teamdf.com/jquery-plugins/license/
        *
        * @author Sam Sehnert
        * @desc A small plugin that checks whether elements are within
        *     the user visible viewport of a web browser.
        *     only accounts for vertical position, not horizontal.
        */

        $.fn.visible = function(partial) {
            
            var $t            = $(this),
                $w            = $(window),
                viewTop       = $w.scrollTop(),
                viewBottom    = viewTop + $w.height(),
                _top          = $t.offset().top,
                _bottom       = _top + $t.height(),
                compareTop    = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;
            
            return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

        };
            
        })(jQuery);
        </script>
        -->

        <script>
            $(window).scroll(function(event) {
            $(".module").each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                el.addClass("come-in"); 
                } 
            });
            });
        </script>

        <script>
            var win = $(window);
            var allMods = $(".module");

            // Already visible modules
            allMods.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("already-visible"); 
            } 
            });

            win.scroll(function(event) {

            allMods.each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                el.addClass("come-in"); 
                } 
            });
            });
        </script>
@endsection