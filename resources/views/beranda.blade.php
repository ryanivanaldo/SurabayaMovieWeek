<!DOCTYPE html>
<html lang="en">
<head>

     <title>Surabaya Movie Weeks 2020</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="home.blade.php" class="navbar-brand">Surabaya Movie Weeks 2020</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Beranda</a></li>
                         <li><a href="#about" class="smoothScroll">Program</a></li>
                         <li><a href="#team" class="smoothScroll">Profil</a></li>
                         <li><a href="#menu" class="smoothScroll">Trailer</a></li>
                         <li><a href="#contact" class="smoothScroll">Lokasi</a></li>
                    </ul>

                    <!-- <i class="fa fa-phone"></i> -->
                    <ul class="nav navbar-nav navbar-right">
                    @if (Route::has('login'))
                                   @auth
                                   <li><a href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>
                                   @else
                                   <li><a href="{{ route('login') }}">Login</a></li>

                                   @if (Route::has('register'))
                                       <li> <a href="{{ route('register') }}">Register</a></li>
                                   @endif
                                   @endauth
                              
                         @endif
                         <!-- @if (Route::has('login'))
                                   @auth
                                   <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                                   @else
                                   <a href="{{ route('login') }}">Login</a>

                                   @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                   @endif
                                   @endauth
                              
                         @endif -->
                    </ul>
               </div>
          
          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Hai para sutradara muda</h3>
                                             <h1>Jadilah bagian dari Industri perfilman di Indonesia!</h1>
                                             <!-- <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our chef</a> -->
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Bebaskan imajinasimu</h3>
                                             <h1>Imagination are very welcome here!</h1>
                                             <!-- <a href="#menu" class="section-btn btn btn-default smoothScroll">Discover menu</a> -->
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>*Berlaku untuk 100 pendaftar pertama</h3>
                                             <h1>Beli tiket dengan go-pay<br>dapet diskon!</h1>
                                             <!-- <a href="#contact" class="section-btn btn btn-default smoothScroll">Reservation</a> -->
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>Saatnya buktikan dirimu sebagai sutradara berbakat!</h4>
                                   <h2>Surabaya Movie Weeks 2020</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Tema “Pemuda Dulu, Kini dan Esok” ini, kami mengajak generasi muda di Surabaya, khususnya pembuat film untuk membuat film mengangkat keresahan dalam beropini dan cara usaha untuk mengembalikan budaya saling menghargai pendapat di era milenial sekarang ini.</p>
                                   <!-- <p>Sed elementum vel felis sed scelerisque. In arcu diam, sollicitudin eu nibh ac, posuere tristique magna. You can use this template for your cafe or restaurant website. Please tell your friends about <a href="https://plus.google.com/+templatemo" target="_parent">templatemo</a>. Thank you.</p> -->
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/about-image.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Juri Suraba Movie Weeks 2020</h2>
                              <!-- <h4>Mereka yang akan menilai kali</h4> -->
                              
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/anjas-maradita.jpg" class="img-responsive" alt="" style="object-fit:cover">
                                   <!-- <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Duis vel lacus id magna mattis vehicula</h4> 
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                  <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             </ul>
                                        </div>
                                   </div> -->
                         </div>
                         <div class="team-info">
                              <h3>Anjas Maradita</h3>
                              <p>Editor</p>
                              <h5>Producer at Daunnet Film & Neuron Media</h5>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/fajar-nugroho.jpg" class="img-responsive" alt="">
                                   <!-- <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Cras suscipit neque quis odio feugiat</h4>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-instagram"></a></li>
                                                  <li><a href="#" class="fa fa-flickr"></a></li>
                                             </ul>
                                        </div>
                                   </div> -->
                         </div>
                         <div class="team-info">
                              <h3>Fajar Nugroho</h3>
                              <p>Sutradara</p>
                              <h5>Director film "YOWISBEN" dan "YOWISBEN 2"</h5>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/rukman-rosadi.jpg" class="img-responsive" alt="">
                                   <!-- <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Etiam auctor enim tristique faucibus</h4>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-github"></a></li>
                                                  <li><a href="#" class="fa fa-google"></a></li>
                                             </ul>
                                        </div>
                                   </div> -->
                         </div>
                         <div class="team-info">
                              <h3>Rukman Rosadi</h3>
                              <p>Actor</p>
                              <h5>Founder of Saturday Acting Club (SAC)</h5>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/mawar-pandan.jpg" class="img-responsive" alt="">
                                   <!-- <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Etiam auctor enim tristique faucibus</h4>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-github"></a></li>
                                                  <li><a href="#" class="fa fa-google"></a></li>
                                             </ul>
                                        </div>
                                   </div> -->
                         </div>
                         <div class="team-info">
                              <h3>Mega Pandan W.</h3>
                              <p>Manajemen Produksi</p>
                              <h5>Dosen Universitas Dinamika</h5>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Trailer</h2>
                              <h4>Kumpulan trailer dari para peserta Surabaya Movie Weeks 2020</h4>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <!-- <a href="images/trailer/angelita-trailer.jpg" class="image-fluid" title="Alita : Battle Angel"> -->
                                   <img src="images/trailer/angelita-trailer.jpg" class="img-responsive" class="img-fluid" data-toggle="modal" data-target="#exampleModalCenter">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Angelita</h3>
                                             <p>Created by Rizky Febian</p>
                                        </div>
                                        <!-- <div class="menu-price">
                                             <span>$25</span>
                                        </div> -->
                                   </div>
                              <!-- </a> -->
                         </div>
                    </div>
                                        
                    

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <!-- <a href="images/trailer/avanger-trailer.jpg" class="image-popup" title="Avangers : Age of Ultron"> -->
                                   <img src="images/trailer/avanger-trailer.jpg" class="img-responsive" class="img-fluid" data-toggle="modal" data-target="#playtrailer2">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Avanger : Age of Ultron</h3>
                                             <p>Created by Aditya Martin Agusta</p>
                                        </div>
                                        <!-- <div class="menu-price">
                                             <span>$18</span>
                                        </div> -->
                                   </div>
                              <!-- </a> -->
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <!-- <a href="images/trailer/everything-trailer.jpg" class="image-popup" title="Everyting, Everything"> -->
                                   <img src="images/trailer/everything-trailer.jpg" class="img-responsive" class="img-fluid" data-toggle="modal" data-target="#playtrailer3">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Everything, Everything</h3>
                                             <p>Created by DL Movie Maker</p>
                                        </div>
                                        <!-- <div class="menu-price">
                                             <span>$34</span>
                                        </div> -->
                                   </div>
                              <!-- </a> -->
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <!-- <a href="images/trailer/john-wick-trailer.jpg" class="image-popup" title="John Wick : Rise of Dinamikawan Sejati"> -->
                                   <img src="images/trailer/john-wick-trailer.jpg" class="img-responsive" class="img-fluid" data-toggle="modal" data-target="#playtrailer4">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>John Wick : Rise of Dinamikawan Sejati</h3>
                                             <p>Created by IndoXXI</p>
                                        </div>
                                        <!-- <div class="menu-price">
                                             <span>$28</span>
                                        </div> -->
                                   </div>
                              <!-- </a> -->
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <!-- <a href="images/trailer/liorona-trailer.jpg" class="image-popup" title="The Curse of La Llorona"> -->
                                   <img src="images/trailer/liorona-trailer.jpg" class="img-responsive" class="img-fluid" data-toggle="modal" data-target="#playtrailer5">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>The Curse of Llorona</h3>
                                             <p>Created by Dinda Kurnia MV</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>$46</span>
                                        </div>
                                   </div>
                              <!-- </a> -->
                         </div>
                    </div>

                    

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <!-- <a href="images/trailer/sundance-trailer.jpg" class="image-popup" title="Before I Fall 'Sundance'"> -->
                                   <img src="images/trailer/sundance-trailer.jpg" class="img-responsive" class="img-fluid" data-toggle="modal" data-target="#playtrailer6">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Before I Fall 'Sundance'</h3>
                                             <p>Created By SMA Antartika Sejahtera</p>
                                        </div>
                                        <!-- <div class="menu-price">
                                             <span>$30</span>
                                        </div> -->
                                   </div>
                              <!-- </a> -->
                         </div>
                    </div>


               </div>

               <!-- Video 1 -->
               <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="width:600px;height:400px;"role="document">
                    <div class="modal-content">
                        
                         <div class="modal-body">
                         <iframe width="500" height="400" src="https://www.youtube.com/embed/cislZ9S0ocA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </div>

                         <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                         </div>
                    </div>
                    </div>
               </div>

               <!-- Video 2 -->
               <div class="modal fade" id="playtrailer2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="width:600px;height:400px;"role="document">
                    <div class="modal-content">
                        
                         <div class="modal-body">
                         <iframe width="500" height="400" src="https://www.youtube.com/embed/tmeOjFno6Do" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </div>

                         <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                         </div>
                    </div>
                    </div>
               </div>

               <!-- Video 3 -->
               <div class="modal fade" id="playtrailer3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="width:600px;height:400px;"role="document">
                    <div class="modal-content">
                        
                         <div class="modal-body">
                         <iframe width="500" height="400" src="https://www.youtube.com/embed/42KNwQ6u42U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </div>

                         <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                         </div>
                    </div>
                    </div>
               </div>

               <!-- Video 4 -->
               <div class="modal fade" id="playtrailer4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="width:600px;height:400px;"role="document">
                    <div class="modal-content">
                        
                         <div class="modal-body">
                         <iframe width="500" height="400" src="https://www.youtube.com/embed/2AUmvWm5ZDQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </div>

                         <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                         </div>
                    </div>
                    </div>
               </div>

               <!-- Video 5 -->
               <div class="modal fade" id="playtrailer5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="width:600px;height:400px;"role="document">
                    <div class="modal-content">
                        
                         <div class="modal-body">
                         <iframe width="500" height="400" src="https://www.youtube.com/embed/uOV-xMYQ7sk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </div>

                         <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                         </div>
                    </div>
                    </div>
               </div>

               <!-- Video 6 -->
               <div class="modal fade" id="playtrailer6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="width:600px;height:400px;"role="document">
                    <div class="modal-content">
                        
                         <div class="modal-body">
                         <iframe width="500" height="400" src="https://www.youtube.com/embed/3Y84mFUl7WI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </div>

                         <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                         </div>
                    </div>
                    </div>
               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <!-- <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Testimonials</h2>
                         </div>
                    </div>  

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item">
                                   <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum ullamcorper nulla non.</p>
                                        <div class="tst-author">
                                             <h4>Digital Carlson</h4>
                                             <span>Pharetra quam sit amet</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed vestibulum orci quam.</p>
                                        <div class="tst-author">
                                             <h4>Johnny Stephen</h4>
                                             <span>Magna nisi porta ligula</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Vivamus aliquet felis eu diam ultricies congue. Morbi porta lorem nec consectetur porta quis dui elit habitant morbi.</p>
                                        <div class="tst-author">
                                             <h4>Jessie White</h4>
                                             <span>Vitae lacinia augue urna quis</span>
                                        </div>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>   -->


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                         <!-- How to change your own map point
                              1. Go to Google Maps
                              2. Click on your location point
                              3. Click "Share" and choose "Embed map" tab
                              4. Copy only URL and paste it within the src="" field below
                         -->
                         <div class="col-md-12 col-sm-12">

                              <div class="col-md-12 col-sm-12">
                                   <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                        <h2>Lokasi Lomba</h2>
                              </div>
                         </div>

                    <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.377270711204!2d112.78022151420475!3d-7.311445173915165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb215a548bbb%3A0xdb6b8f634709fa9e!2sDinamika%20University!5e0!3m2!1sen!2sid!4v1582691054762!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                         </div>
                    </div>    

                    

                         <!-- CONTACT FORM -->
                         <!-- <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s"> -->

                              <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                              <!-- <h6 class="text-success">Your message has been sent successfully.</h6> -->
                              
                              <!-- IF MAIL NOT SENT -->
                              <!-- <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                              </div>
                         </form> -->
                    </div>

               </div>
          </div>
     </section>          


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Find us</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Universitas Dinamika Surabaya,<br> Jl. Raya Kedung Baruk No.98<br>Kedung Baruk, Kec. Rungkut, Surabaya<br> Jawa Timur 60298</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Contact Person</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Sutradara :</p>
                                   <p>081666333 (Martin)</p>
                                   <p>LINE: martinjaya12 </p>
                                   <!-- <p><a href="mailto:info@company.com">info@company.com</a></p> -->
                                   
                              </address>
                         </div>
                    </div>

                    <!-- <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Open Hours</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Monday: Closed</p>
                                   <div>
                                        <strong>Tuesday to Friday</strong>
                                        <p>7:00 AM - 9:00 PM</p>
                                   </div>
                                   <div>
                                        <strong>Saturday - Sunday</strong>
                                        <p>11:00 AM - 10:00 PM</p>
                                   </div>
                              </div>
                         </div>
                    </div> -->

                    <div class="col-md-3 col-sm-8">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-google"></a></li>
                         </ul>

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
                              <p><br>Copyright &copy; 2020 <br>Universitas Dinamika Surabaya 

                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     
     
     </script>
</body>
</html>