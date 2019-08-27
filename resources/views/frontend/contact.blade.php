@extends('layouts.frontendcontact')
@section('content')
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
        <a href="{{route ('product')}}" class="menu10 button1 effect-1 sub-b" id="link2" onclick="goURL(this.href);return false"><p>Product</p></a> <br>
        <a href="{{route ('contact')}}" class="menu11 button1 disable" id="link3" onclick="goURL(this.href);return false"><p>Contact Us</p></a> <br>
        <a href="{{route ('others')}}" class="menu12 button1 effect-1 sub-b" id="link4" onclick="goURL(this.href);return false"><p>Others</p></a> <br>
    </nav>

    <main>
        <div class="besar-sekali min-width-500">
            <div class="sedang-sekali" >
                <h1 class="title-contact">CONTACT US</h1>
                <div class="min-width-500">
               
                    <div class="gabungan-kotak-contact">
                    @foreach($contact as $data)
                        <div class="kotak-contact1">
                            <!--<div class="sub-title-contact1">MAP</div>-->
                            <img alt="Map" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" class="back gambar-kotak1">
                            <div id="myBtn_maps" class="btn btn-success">
                                <!-- <div class="glyphicon glyphicon-map-marker"> 	
                                </div> -->
                                <div class="panah-kanan"></div>
                                <div class="dalam-button-contact">
                                        Click me!
                                </div>
                            </div>

                            <div class="modal_maps"  id="myModal_maps">
                                <!-- Content Model -->
                                <div class="modal-content_maps">
                                    <div class="modal-header_maps">
                                        <span class="close_maps">&times;</span>
                                    </div>
                                    <div class="modal-body_maps">
                                        <iframe src=
                                        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3095400741045!2d107.58874611431763!3d-6.972760270212417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9283f7e6177%3A0xfec6ae9ae38e356b!2sAzmirza+Mitra+Informatika!5e0!3m2!1sen!2sid!4v1560844478415!5m2!1sen!2sid"
                                        width="800" height="380" class="isi-iframe" allowfullscreen></iframe>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach($contact2 as $data)
                        <div class="kotak-contact2" >
                            <div class="sub-title-contact2">Location</div>
                            <img alt="Location" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" class="back gambar-kotak2">
                            <div class="isi-kotak-contact2">
                                Jl. Sukamenak (Sayati - Palasari) No.228, Cangkuang Kulon <br> Kecamatan Dayeuhkolot <br> Kabupaten Bandung<br> Jawa Barat - 40239<br><br>
                                <br>
                            </div>
                        </div>
                        @endforeach
                        @foreach($contact3 as $data)
                        <div class="kotak-contact3">
                            <div class="sub-title-contact3">&nbsp;&nbsp;Mail</div>
                            <img alt="Contact" src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" class="back gambar-kotak3">
                            <div class="isi-kotak-contact2">
                                <img alt="phone" src="{{ asset ('jadi/images/phone_ami.png')}}" class="icon-contact-ami">&nbsp; (022) 8777 7584
                                <br>
                                <br>
                                <img alt="email" src="{{ asset ('jadi/images/mail_ami.png')}}" class="icon-contact-ami">&nbsp; management@azmirza.com
                                <br>
                                <img alt="gmail" src="{{ asset ('jadi/images/logo-gmail.png')}}" class="icon-contact-gmail">&nbsp; azmirza.mi.228@gmail.com
                            </div>  	
                        </div>
                        @endforeach
                    </div>  
               
                </div>          
            </div>
        </div>
    </main>

<script>
    setTimeout(function() {
    $('.preload-abu').fadeOut(800, function(){ $('.preload-abu').remove(); } );
    }, 300);
</script>

<script>
    function zoomin() {
    var myImg = document.getElementById("peta-ami-dalam");
    var currWidth = myImg.clientWidth;
    if (currWidth > 2500) return false;
    else {
        myImg.style.width = (currWidth + 400) + "px";
    }
    }

    function zoomout() {
    var myImg = document.getElementById("peta-ami-dalam");
    var currWidth = myImg.clientWidth;
    if (currWidth < 1400) return false;
    else {
        myImg.style.width = (currWidth - 400) + "px";
    }
    }
</script>

<!--Agar Map berada di scroll tengah-->
<script>
    $('#peta-ami').scrollLeft(600);
    $('#peta-ami').scrollTop(250);
</script>

<!--UNTUK MODALS--->
<script>
    var modal_maps = document.getElementById("myModal_maps");

    // Get the button that opens the modal
    var btn_maps = document.getElementById("myBtn_maps");

    // Get the <span> element that closes the modal
    var span_maps = document.getElementsByClassName("close_maps")[0];

    // When the user clicks the button, open the modal 
    btn_maps.onclick = function() {
    modal_maps.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span_maps.onclick = function() {
    modal_maps.style.display = "none";
    }
    window.onclick = function(event) {
    if (event.target == modal_maps) {
        modal_maps.style.display = "none";
    }
    }
</script>
@endsection