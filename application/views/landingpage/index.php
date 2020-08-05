<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Informasi Manajemen Pelayanan</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url() . 'assets/css/styles.css' ?>" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo base_url() . 'dist/img/pku.png' ?>" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Pimpinan</a></li> -->
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Visi dan Misi</a></li>
                    <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li> -->
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url() . 'auth' ?>">LOGIN</a></li>

                </ul>
            </div>
        </div>
    </nav>
  
    <!-- Services-->
    <section class="page-section gambar-pucuk" id="services">
        <div class="container">
            <div class="text-center">
                <!-- <h2 class="section-heading text-uppercase">pimpinan</h2> -->
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <br><br>
            <div id="pimpinan" class="row text-lg-center text-md-center text-sm-center">
                <!-- <div class="col-md-4"> -->
                <!-- <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div> -->
                    <div class="col-12">
                          <h3>
                              <u>Kelurahan Labuhbaru Barat</u>
                          </h3>
                          <br><br>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <div id="foto" class="card" style="width: 13rem;">
                        <img class="card-img-top" src="<?php echo base_url() . 'dist/img/wali1.jpg' ?>" alt="Camat payung sekaki">
                        <div class="card-body">
                            <h4 style="font-weight: bold;" class="card-text badge badge-danger">Firdaus , S.T, M.T</h4>
                            <p class="card-text">  <b> Walikota Pekanbaru</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div id="foto" class="card" style="width: 13rem;">
                        <img class="card-img-top" src="<?php echo base_url() . 'dist/img/wawali.jpg' ?>" alt="Camat payung sekaki">
                        <div class="card-body">
                            <h4 style="font-weight: bold;" class="card-text badge badge-danger">Ayat Cahyadi</h4>
                            <p class="card-text"> <b>Wakil Walikota Pekanbaru</b> </p>
                        </div>
                    </div>
                </div>
                <div  class="col-lg-4 col-md-6">
                    <div  id="foto" class="card" style="width: 13rem;">
                        <img class="card-img-top" src="<?php echo base_url() . 'dist/img/sekda1.jpg' ?>" alt="Camat payung sekaki">
                        <div class="card-body">
                        <h4 style="font-weight: bold;" class="card-text badge badge-danger">M. Jamil, M.Si</h4>
                            <p class="card-text">  <b>Sekretaris Kota Pekanbaru</b> </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div id="foto" class="card" style="width: 13rem;">
                        <img class="card-img-top" src="<?php echo base_url() . 'dist/img/camat-1.jpg' ?>" alt="Camat payung sekaki">
                        <div class="card-body">
                            <h4 style="font-weight: bold;" class="card-text badge badge-danger">Fauzan, S.STP, M.Si</h4>
                            <p class="card-text">  <b>Camat Payung Sekaki</b> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div id="foto"class="card" style="width: 13rem;">
                        <img class="card-img-top" src="<?php echo base_url() . 'dist/img/lurah-1.jpg' ?>" alt="Lurah labuhbaru barat">
                        <div class="card-body">
                            <h4 style="font-weight: bold;" class="card-text badge badge-danger">Wahyu Nofiyandri, M.Pd</h4>
                            <p class="card-text">  <b> Lurah Labuhbaru Barat</b></p>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

      <!-- Masthead-->
      <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang!</div>
            <div class="masthead-heading text-uppercase">Di Sistem Informasi Manajemen Pelayanan</div>
            <div class="masthead-footer">Kelurahan Labuhbaru Barat</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Lihat</a>
        </div>
    </header>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase badge badge-warning" >Visi dan Misi</h2>
                <br>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <div class="row text-center">
                <div class="col-lg-12 col-sm-6 mb-4">
                    <h2>Visi Kota Pekanbaru</h2>
                    <br>
                    <h3 class="section-subheading text-muted">"TERWUJUDNYA KOTA PEKANBARU SEBAGAI PUSAT PERDAGANGAN DAN JASA, PENDIDIKAN SERTA PUSAT KEBUDAYAAN MELAYU, MENUJU MASYARAKAT SEJAHTERA BERLANDASKAN IMAN DAN TAQWA"</h3>

                </div>
                <div class="col-lg-12 col-sm-6 mb-4">
                    <h2>Misi Kota Pekanbaru</h2>
                    <br>
                    <ol style="text-align:left;">
                        <li>Meningkatkan Sumber Daya Manusia (SDM) yang Bertaqwa, Mandiri, Tangguh dan Berdaya Saing Tinggi</li>
                         <li>Mewujudkan Pembangunan Masyarakat Madani Dalam Lingkup Masyarakat Berbudaya Melayu</li>
                         <li>Mewujudkan Tata Kelola Kota Cerdas dan Penyediaan Infrastruktur yang Baik</li>
                         <li>Mewujudkan Pembangunan Ekonomi Berbasiskan Ekonomi Kerakyatan dan Ekonomi Padat  Modal, pada Tiga Sektor Unggulan, yaitu Jasa, Perdagangan dan Industri (olahan dan MICE)</li>
                         <li>Mewujudkan Lingkungan Perkotaan yang Layak Huni (Liveable City) dan Ramah Lingkungan (Green City)</li>

                   

                    </ol>
                </div>
                
            </div>
        </div>
    </section>
    <!-- About-->
        <!-- <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2012</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2014</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section> -->
    <!-- Team-->
    <!-- <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                        <h4>Diana Petersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Clients-->
    
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
 
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src=" <?php echo base_url() . 'assets/js/scripts.js' ?>"></script>
</body>

</html>