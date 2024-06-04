<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>UangQu</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <style>
    .ourservice {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    .multi-columns-row {
        display: flex;
        justify-content: space-around; /* Mengatur jarak antar item */
        flex-wrap: wrap;
    }
    .service-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin: 1rem; /* Memberikan ruang di sekitar item */
    }
    /* Mengatur lebar untuk responsivitas */
    @media (min-width: 768px) {
        .col-md-3.col-sm-6.col-xs-12 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    </style>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-transparent navbar-fixed-top one-page" role="navigation">
        <div class="container">
        <div class="navbar-header">
            <span class="navbar-toggle" type="text" data-toggle="collapse" data-target="#custom-collapse">Toggle navigation</span>
            <a class="navbar-brand" >UangQu</a>
        </div>

          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#totop">Home</a></li>
              <li><a class="section-scroll" href="#services">Services</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="home-section home-full-height bg-dark bg-gradient" id="home" data-background="assets/images/homepage.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-40 titan-title-size-4">UangQu</div>
          </div>
        </div>
      </section>
      <section class="module" id="team">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Meet Our Team</h2>
                <div class="module-subtitle font-serif">Kelompok 9</div>
              </div>
            </div>
            <div class="row">
              <div class="owl-carousel text-center" data-items="4" data-pagination="true" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12 mb-sm-20 wow fadeInUp">
                    <div class="team-item">
                      <div class="team-image"><img src="assets/images/team-1.jpg" alt="Member Photo"/>
                        <div class="team-detail">
                          <h5 class="font-alt">Hafizh Al Fauzi</h5>
                          <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                          <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                        </div>
                      </div>
                      <div class="team-descr font-alt">
                        <div class="team-name">Hafizh Al Fauzi</div>
                        <div class="team-role">Ketua</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="owl-item">
                  <div class="col-sm-12 mb-sm-20 wow fadeInUp">
                    <div class="team-item">
                      <div class="team-image"><img src="assets/images/team-3.jpg" alt="Member Photo"/>
                        <div class="team-detail">
                          <h5 class="font-alt">Faza Hanif Suwanda</h5>
                          <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                          <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                        </div>
                      </div>
                      <div class="team-descr font-alt">
                        <div class="team-name">Faza Hanif Suwanda</div>
                        <div class="team-role">Front-End</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="owl-item">
                  <div class="col-sm-12 mb-sm-20 wow fadeInUp">
                    <div class="team-item">
                      <div class="team-image"><img src="assets/images/team-4.jpg" alt="Member Photo"/>
                        <div class="team-detail">
                          <h5 class="font-alt">Afta Alfadhilla</h5>
                          <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                          <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                        </div>
                      </div>
                      <div class="team-descr font-alt">
                        <div class="team-name">Afta Alfadhilla</div>
                        <div class="team-role">Back-End</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="owl-item">
                  <div class="col-sm-12 mb-sm-20 wow fadeInUp">
                    <div class="team-item">
                      <div class="team-image"><img src="assets/images/team-1.jpg" alt="Member Photo"/>
                        <div class="team-detail">
                          <h5 class="font-alt">A. Muh. Haikal Fajar</h5>
                          <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                          <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                        </div>
                      </div>
                      <div class="team-descr font-alt">
                        <div class="team-name">A. Muh. Haikal Fajar</div>
                        <div class="team-role">System Analys</div>
                      </div>
                    </div>
                  </div>
                </div>
        </section>

        <hr class="divider-w mt-10 mb-20">
        
      <div class="main">
        <section class="module" id="services">
            <div class="ourservice">
                <!-- Konten "OUR SERVICES" ditengahkan -->
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Our Services</h2>
                        <div class="module-subtitle font-serif">Kami menyediakan beberapa service untuk membantumu dalam mengelola keuangan pribadi</div>
                    </div>
                </div>
                <!-- Elemen-elemen di dalam baris berdampingan dan ditengahkan -->
                <div class="row multi-columns-row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="/indexbudget" style="text-decoration: none; color: inherit;"> <!-- Menambahkan hyperlink ke halaman anggaran -->
                        <div class="service-item">
                            <div class="features-icon"><span class="icon-wallet"></span></div>
                            <h3 class="features-title font-alt">Anggaran</h3>
                        </div>
                    </a>
                </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <a href="/indextransaksi" style="text-decoration: none; color: inherit;">
                        <div class="service-item">
                            <div class="features-icon"><span class="icon-clipboard"></span></div>
                            <h3 class="features-title font-alt">Transaksi</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
        </section>
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">About Kelompok 9</h5>
                  <p>Kami adalah Kelompok 9, yang terdiri dari Hafizh, Faza, Afta, dan Haikal. Kami saat ini sedang mengambil matakuliah Integrasi Aplikasi Enterprise. Bersama-sama, kami berdedikasi untuk belajar dan mengembangkan solusi teknologi yang inovatif dan efisien. Kami percaya bahwa kerja sama tim dan dedikasi adalah kunci sukses kami.</p>
                  <p>Phone: +62 822 1149 5559</p>Fax: +1 234 567 89 10
                  <p>Email:<a href="#"> kelompok9@gmail.com</a></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Recent Comments</h5>
                  <ul class="icon-list">
                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <li><a href="#">Photography - 7</a></li>
                    <li><a href="#">Web Design - 3</a></li>
                    <li><a href="#">Illustration - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Popular Posts</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                        <div class="widget-posts-meta">23 january</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                        <div class="widget-posts-meta">15 February</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2024&nbsp;<a href="/">Kelompok 9</a></p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
      <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>