<html><head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Diajukan untuk memenuhi tugas Praktikum Desain Web.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, one page">
    <meta name="author" content="JindongInside">

    <link rel="shortcut icon" type="assets/image/x-icon" href="uty.png">
    <title>Nida Travel</title>

    <link href="assets/css/metro.css" rel="stylesheet">
    <link href="assets/css/metro-icons.css" rel="stylesheet">
    <link href="assets/css/metro-responsive.css" rel="stylesheet">
    <link href="assets/css/metro-schemes.css" rel="stylesheet">

    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/js/metro.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/google/code-prettify/master/loader/prettify.css">
<body>
    <div><header class="app-bar fixed-top navy" data-role="appbar">
    <div class="container">
        <a href="index.php" class="app-bar-element branding"><img src="uty.png" style="height: 28px; display: inline-block; margin-right: 10px;"> Beranda</a>

        <ul class="app-bar-menu small-dropdown">
            <li data-flexorderorigin="0" data-flexorder="2" class="">
                <a href="#profil"><span class="mif-profile icon"></span> Profil</a>
            </li>
            <li data-flexorderorigin="1" data-flexorder="2">
                <a href="#destinasi"><span class="mif-books icon"></span> Destinasi</a>
            </li>

            <li data-flexorderorigin="2" data-flexorder="3">
                <a href="#pemesanan"><span class="mif-cart icon"></span> Reservasi</a>
            </li>

            <li data-flexorderorigin="3" data-flexorder="4">
                <a href="#kontak"><span class="mif-contacts-dialer icon"></span> Kontak</a>
            </li>
        </ul>

        <span class="app-bar-pull"></span>

    <div class="app-bar-pullbutton automatic" style="display: none;"></div><div class="clearfix" style="width: 0;"></div><nav class="app-bar-pullmenu hidden flexstyle-app-bar-menu" style="display: none;"><ul class="app-bar-pullmenubar hidden app-bar-menu"></ul></nav></div>
</header>
</div><div class="page-content">
        <div class="bg-lightBlue fg-white align-center">
            <div class="container">
                <div class="no-overflow" style="padding-top: 40px">

                    <br>
                    <br>
                    <br>
                    <h1 style="font-size: 4.5rem; line-height: 1" class="text-shadow metro-title text-light">Nida Travel</h1>
                    <div class="padding30 sub-leader text-light">
                        Hanya di hari ini, <b>DISKON 30%</b> untuk semua tujuan wisata!
                    </div>
                    <p class="" style="margin-top: 10px; padding: 0 50px">
                        PROMO AKAN BERAKHIR DALAM WAKTU:
                    </p>
                    <div class="countdown" data-role="countdown" data-days="0.1"></div>
                    <div class="margin60">
                        <div class="clear-float">
                            <!-- <a href="#"><button class="button big-button block-shadow success loading-pulse lighten">Download Now</button></a> -->
                            <a href="#pemesanan"><button class="button big-button block-shadow warning loading-cube lighten">PESAN SEKARANG</button></a>
                            <!-- <a href="#pemesanan"><button class="button big-button block-shadow info loading-cube lighten">PESAN SEKAANG!</button></a> -->
                        </div>

                        <!-- arep disi opo -->
                    </div>

                    <div class="grid no-margin-bottom" style="margin-top: 100px" id="g1">
                        <div class="row cells3">
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-yellow fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">Mudah</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-green fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">Hemat</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-red fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">Cepat</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $(function(){
                            setTimeout(function(){
                                $("#g1 .cell > div:eq(0)").animate({
                                    'margin-top': 0
                                }, 500, 'easeOutBounce');
                                $("#g1 .cell > div:eq(1)").animate({
                                    'margin-top': 0
                                }, 1000, 'easeOutBounce');
                                $("#g1 .cell > div:eq(2)").animate({
                                    'margin-top': 0
                                }, 1500, 'easeOutBounce');
                            }, 500);
                        });
                    </script>
                </div>
            </div>
        </div>

        <div class="fg-dark">
            <div id="profil" class="container">
                <div class="padding80" style="padding-top: 40px">
                    <div class="">
                        <div class="grid">
                            <div class="row">            		
                                <div class="cell padding20 clear-float">
					               <div>
	                                    <img id="book_logo" src="assets/image/pexels-photo-733856.jpg" class="place-left" style="height: 190px; margin-right: 20px;">
	                                    <h2 class="text-light">Nida Travel</h2>
	                                    <h3 class="fg-red">Sekilas tentang Nida Travel</h3>
	                                    <div class="fg-dark">
	                                        Nida travel adalah perusahaan yang bergerak di bidang pariwisata. Berdiri sejak Tahun 2017, dan telah memiliki cabang di empat kota di Indonesia seperti Jepara, Yogyakarta, Surabaya dan Kediri. Nida Travel terus berinovasi untuk memberikan yang terbaik bagi wisatawan baik lokal maupun mancanegara.
	                                    </div>
					               </div>
	                               </a>
				                </div>
                                <div class="cell padding20 clear-float">
                                   <div>
                                        <img id="book_logo" src="assets/image/control-writing-work-official-45905.png" class="place-right" style="height: 190px; margin-right: 20px;">
                                        <h1 class="">Keunggulan Nida Travel</h1>
                                        <ol class="numeric-list square-marker">
                                            <li>memiliki <strong><span class="fg-red">sarana</span></strong> and <strong><span class="fg-red">prasarana</span></strong> yang memadai</li>
                                            <li>harga ekonomis</li>
                                            <li>memiliki staff yang profesional</li>
                                            <li>destinasi <i>anti-mainstream</i></li>
                                            <li>melayani setiap keluhan pelanggan</li>
                                        </ol>
                                   </div>
                                   </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    <hr class="thin" ></div>
    <div class="main-content clear-float" id="destinasi">
        <h2 class="text-light"><u>Destinasi</u></h2>
        <div class="tile-area no-padding">
            <div class="tile-group no-margin no-padding" style="width: 100%">
                <div class="tile-group no-margin no-padding" style="width: 100%">
                    <div class="tile-large tile-super-y bg-gray ol-transparent" style="float: right; ">
                        <div class="tile-content">
                            <div class="brand padding10">
                                <h3 class="fg-white">Pasang iklan anda di sini</h3>
                            </div>
                        </div>
                    </div>

                    <div class="tile-large ol-transparent" data-role="tile">
                        <div class="tile-content">
                            <div class="carousel" data-role="carousel" data-height="100%" data-width="100%" data-controls="false">
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-238622.jpg" data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-287240.jpg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-372098.jpg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-458555.jpg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-378153.jpg"  data-role="fitImage" data-format="fill">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile bg-lightBlue fg-white" data-role="tile">
                        <div class="tile-content iconic">
                            <span class="icon mif-earth mif-ani-ripple"></span>
                        </div>
                    </div>
                    <div class="tile bg-orange fg-white" data-role="tile">
                        <div class="tile-content iconic">
                            <span class="icon mif-paper-plane mif-ani-float"></span>
                        </div>
                    </div>
                    <div class="tile bg-teal fg-white" data-role="tile">
                        <div class="tile-content iconic">
                            <span class="icon mif-heart mif-ani-heartbeat"></span>
                        </div>
                    </div>
                    <div class="tile bg-green fg-white" data-role="tile">
                        <div class="tile-content iconic">
                            <span class="icon mif-thumbs-up mif-ani-bounce"></span>
                        </div>
                    </div>

                    <div class="tile-big tile-wide-y bg-white" data-role="tile">
                        <div class="tile-content">
                            <div class="panel" style="height: 100%">
                                <div class="heading bg-darkRed fg-white"><span class="title text-light">Destinasi Unggulan</span></div>
                                <div class="content fg-dark clear-float" style="height: 100%">
                                    <img src="assets/image/destinasi/pexels-photo-287240.jpg" class="place-left margin10" style="height: 120px">
                                    <h2 class="text-light">Kalibiru</h2>
                                    <p>Tempat ini mendadak populer karena memiliki satu spot foto yang unik, yakni berfoto di atas pohon pinus. Spot foto unik ini menjadi begitu istimewa karena pemandangan yang melatarinya pun istimewa, liuk indah Waduk Sermo dibingkai Perbukitan Menoreh yang memanjakan mata. Suasana pagi dan senja pun tak luput dari incaran. Di pagi hari, cahaya keemasan berpadu dengan kabut yang menggelayuti Perbukitan Menoreh akan memompa semangat kita. Sementara itu, suasana senja yang merubah warna langit dan waduk menjadi kuning keemasan terasa begitu syahdu. Untuk bisa sampai ke Desa Wisata Kalibiru ini tidak terlalu sulit, namun butuh berhati-hati. Sebaiknya bawalah kendaraan yang kondisinya prima sehingga tanjakan demi tanjakan dapat ditaklukkan dengan mudah. Lihat alamat dan peta lokasinya di.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile tile-wide-y bg-white" data-role="tile">
                        <div class="tile-content">
                            <div class="panel">
                                <div class="heading bg-pink fg-white"><span class="title text-light">Tips Wisata</span></div>
                                <div class="content bg-lightPink fg-white clear-float">
                                    <img src="assets/image/pexels-photo-175760.jpg" class="">
                                    <strong>Berbelanja</strong> Berbelanja di pasar tradisional lebih menyenangkan dan ekonomis.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End first group -->

                <div class="tile-group no-margin no-padding" style="width: 100%">
                    <div class="tile-wide bg-cyan" data-role="tile">
                        <div class="tile-content image-set">
                            <img src="../images/jeki_chan.jpg">
                            <img src="../images/shvarcenegger.jpg">
                            <img src="../images/vin_d.jpg">
                            <img src="../images/jolie.jpg">
                            <img src="../images/jek_vorobey.jpg">
                        </div>
                    </div>
                    <div class="tile bg-green" data-role="tile" data-effect="slideUpDown">
                        <div class="tile-content">
                            <div class="live-slide"><img src="../images/jeki_chan.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="../images/shvarcenegger.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="../images/vin_d.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="../images/jolie.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="../images/jek_vorobey.jpg" data-role="fitImage" data-format="fill"></div>
                        </div>
                    </div>
                    <div class="tile bg-green" data-role="tile" data-effect="slideLeftRight">
                        <div class="tile-content">
                            <div class="live-slide"><img src="../images/vin_d.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="../images/jolie.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="../images/jek_vorobey.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="../images/jeki_chan.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="../images/shvarcenegger.jpg" data-role="fitImage" data-format="fill"></div>
                        </div>
                    </div>
                    <div class="tile-wide bg-red" data-role="tile">
                        <div class="tile-content image-set">
                            <img src="../images/jeki_chan.jpg">
                            <img src="../images/shvarcenegger.jpg">
                            <img src="../images/vin_d.jpg">
                            <img src="../images/jolie.jpg">
                            <img src="../images/jek_vorobey.jpg">
                        </div>
                    </div>
                </div>
            </div></div></div></div>

    <div>         
    <footer style="background-color: #EFEAE3">
    <div class="bg-steel no-tablet-portrait no-phone">
        <div class="container padding20 fg-white">
            <div class="carousel bg-transparent" data-role="carousel" data-controls="false" data-markers="false" data-effect="fade" data-height="600" style="width: 100%; height: 600px;">
                <div class="slide fg-white">
                    <!-- pesen -->
                    <div id="pemesanan" class="container padding40 fg-white">
                        <h3 class="text-light">Bergabunglah! nikmati pengalaman tak terlupakan bersama <strong>Nida Travel</strong></h3>  
                        <form>
                        <div class="grid">
                            <div class="row cells2">
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="text" style="padding-right: 5px;">
                                        <span class="label">Nama</span>
                                        <span class="informer">Maukkan nama anda</span>
                                        <span class="placeholder" style="display: block;">Nama lengkap</span>
                                        <span class="icon mif-user"></span>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="email" style="padding-right: 5px;">
                                        <span class="label">Email</span>
                                        <span class="informer">Masukkan alamat email anda</span>
                                        <span class="placeholder" style="display: block;">Alamat email</span>
                                        <span class="icon mif-mail"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row cells2">
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="number" style="padding-right: 5px;">
                                        <span class="label">Nomor HP</span>
                                        <span class="informer">Masukkan nomor HP anda</span>
                                        <span class="placeholder" style="display: block;">Nomor HP</span>
                                        <span class="icon mif-contacts-dialer"></span>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="text" style="padding-right: 5px;">
                                        <span class="label">Kode Promo</span>
                                        <span class="informer">Masukkan kode promo</span>
                                        <span class="placeholder" style="display: block;">Kode promo</span>
                                        <span class="icon mif-discout"></span>
                                    </div>
                                </div>
                            </div>
                            <div clear-float>
                                <label class="input-control checkbox small-check">
                                <input type="checkbox"">
                                <span class="check"></span>
                                <span class="caption">Saya setuju dengan syarat dan aturan yang berlaku!</span>
                            </label>
                            </div>
                            <button action="" class="button big-button block-shadow success loading-pulse lighten" align="align-center"> Pesan</button>
                        </div>
                    </form>
                    </div>
                    <!-- smpe kene wae -->
                </div>
            </div>
        </div>
    </div>

    <div id="kontak" class="container">
        <!-- kontakkkk-->
        <div class="cell colspan3 padding20 no-padding-top no-padding-bottom">
            <h2>Kontak</h2>
            <p>
                Informasi lebih lanjut, hubungi:
            </p>
            <div>
                <div class="icon mif-home mif-lg"><h3>Jl. Palagan, Sleman, Yogyakarta</h3></div>
                <div class="icon mif-contacts-dialer mif-lg"><h3>023456789</h3></span>
                <div class="icon mif-mail mif-lg"><a href="mailto:nidarahayu77@gmail.com"><h3>nidarahayu77@gmail.com</h3></a></div>
                <div class="icon mif-facebook mif-lg"><a href="https://#"><h3>NidaTravelID</h3></a></div>
                <div class="icon mif-twitter mif-lg"><a href="https://#"><h3>@nidatravel</h3></a></div>
                <div class="icon mif-earth mif-lg"><a href="https://#"><h3>www.nidatravel.com</h3></a></div>
            </div>
        </div>

        <div class="align-center padding20 text-small">
            Copyright 2017 <a href="index.php">Nida Travel</a>
        </div>
    </div>
</footer>
</div>

</body></html>