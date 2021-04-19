<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.2-web/css/all.min.css">
    <!-- <link rel="stylesheet" href="fontawesome-free-5.15.2-web/scss/fontawesome.scss"> -->
    {{--
    <link rel="stylesheet" href="{{asset ('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset ('css/home.css')}}" /> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Font awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset ('css/style.css') }}" rel="stylesheet">
    <link href="css/style-color.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo/favicon.ico">

    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- WayPoints JS -->
    <script src="js/waypoints.min.js"></script>
    <!-- Include js plugin -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- One Page Nav -->
    <script src="js/jquery.nav.js"></script>
    <!-- Respond JS for IE8 -->
    <script src="js/respond.min.js"></script>
    <!-- HTML5 Support for IE -->
    <script src="js/html5shiv.js"></script>
    <!-- Custom JS -->
    <script src="{{ secure_asset('js/custom.js') }}" defer></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <title>The family Movement</title>
</head>

<body>
<center>
@include('cookieConsent::index')
<center/>
    <div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
                </div>
                <!-- form for events ticket booking -->
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputContact">Contact</label>
                            <input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputSeats">Number of Tickets</label>
                            <select class="form-control" id="exampleInputSeats">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
                        </div>
                        <div class="checkbox">
                            <label>
              <input type="checkbox"> I accept the Terms of Service
            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <!-- link to payment gatway here -->
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- wrapper -->
    <div class="wrapper" id="home">

        <!-- header area -->
        <header>
            <!-- secondary menu -->
            <nav class="secondary-menu">
                <div class="container">
                    <!-- secondary menu left link area -->
                    <div class="sm-left">
                        <strong>Phone</strong>:&nbsp; <a href="#">0678027826</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong>E-mail</strong>:&nbsp; <a href="#">themovementfamily842@gmail.com</a>
                    </div>
                    <!-- secondary menu right link area -->
                    <div class="sm-right">
                        <!-- social link -->
                        <div class="sm-social-link">
                            <a class="h-facebook" href="https://m.facebook.com/The-Movement-SA-100583651755768/"><i class="fa fa-facebook"></i></a>
                            <a class="h-linkedin" href="https://youtu.be/iUHZNHzYUm0"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </nav>
            <!-- primary menu -->
            <nav class="navbar navbar-fixed-top navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                        <!-- logo area -->
                        <a class="navbar-brand" href="#home">
                            <!-- logo image -->
                            <img class="img-responsive" src="img/logo/tfmLogo.png" alt="" />
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#latestalbum">Music</a></li>
                            <li><a href="#featuredalbum">Band</a></li>
                            <li><a href="#team">Photos</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!--/ header end -->

        <!-- banner area -->
        <div class="banner">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/banner/pexels-aleksandar-pasaric-2078008.jpg" alt="...">
                        <div class="container">
                            <!-- banner caption -->
                            <div class="carousel-caption slide-one">
                                <!-- heading -->
                                <h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Afro pop is our lifestyle</h2>
                                <!-- paragraph -->
                                <h3 class="animated fadeInRightBig">Reach us below to book an event</h3>
                                <!-- button -->
                                <a href="#" class="animated fadeIn btn btn-theme">Contact us</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!--/ banner end -->

        <!-- block for animate navigation menu -->
        <div class="nav-animate"></div>

        <!-- Hero block area -->
        <div id="latestalbum" class="hero pad">
            <div class="container">
                <!-- hero content -->
                <div class="hero-content ">
                    <!-- heading -->
                    <h2>Latest Album</h2>
                    <hr>
                    <!-- paragraph -->
                </div>
                <!-- hero play list -->
                <div class="hero-playlist">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <!-- music album image -->
                            <div class="figure">
                                <!-- image -->
                                <img class="img-responsive" src="img/album/logo.jpg" alt="" />
                                <!-- disk image -->
                                <img class="img-responsive disk" src="img/album/disk.png" alt="" />
                            </div>
                            <!-- album details -->
                            <div class="album-details">
                                <!-- title -->
                                <h4>Amaphupho</h4>
                                <!-- composed by -->
                                <h5>By The Movement Family</h5>
                                <!-- paragraph -->
                                <!-- button -->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!-- play list -->
                            <div class="playlist-content">
                                <ul class="list-unstyled">
                                    <div class="playlist-number">
                                        <!-- song information -->
                                        <div class="song-info">
                                            <!-- song title -->
                                            <center>
                                                <h4>Angivumi</h4>
                                            </center>
                                            <audio class="audio" id="audio" src="Amaphupho/Angivumi.mp3" controls onclick="toggleTrack();"></audio>

                                            <center>
                                                <p><strong>Album</strong>: Amaphupho &nbsp;|&nbsp; <strong>Type</strong>: Afro Pop &nbsp;</p>
                                            </center>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <li class="playlist-number">
                                        <!-- song information -->
                                        <div class="song-info">
                                            <!-- song title -->
                                            <center>
                                                <h4>Buyel’ekhaya</h4>
                                            </center>
                                            <audio class="audio" id="audio" src="Amaphupho/Buyel'ekhaya.mp3" controls onclick="toggleTrack();"></audio>

                                            <center>
                                                <p><strong>Album</strong>: Amaphupho &nbsp;|&nbsp; <strong>Type</strong>: Afro Pop &nbsp;</p>
                                            </center>
                                        </div>

                                        <div class="clearfix"></div>
                                    </li>
                                    <li class="playlist-number">
                                        <!-- song information -->
                                        <div class="song-info">
                                            <!-- song title -->
                                            <center>
                                                <h4>Jerusalema</h4>
                                            </center>
                                            <audio class="audio" id="audio" src="Amaphupho/Jerusalema.mp3" controls onclick="toggleTrack();"></audio>
                                            <center>
                                                <p><strong>Album</strong>: Amaphupho &nbsp;|&nbsp; <strong>Type</strong>: Afro Pop &nbsp;</p>
                                            </center>
                                        </div>

                                        <div class="clearfix"></div>
                                    </li>
                                    <li class="playlist-number">
                                        <!-- song information -->
                                        <div class="song-info">
                                            <!-- song title -->
                                            <center>
                                                <h4>Ngiyabonga</h4>
                                            </center>
                                            <audio class="audio" id="audio" src="Amaphupho/Ngiyabonga.mp3" controls onclick="toggleTrack();"></audio>
                                            <center>
                                                <p><strong>Album</strong>: Amaphupho &nbsp;|&nbsp; <strong>Type</strong>: Afro Pop &nbsp;</p>
                                            </center>
                                        </div>

                                        <div class="clearfix"></div>
                                    </li>
                                    <li class="playlist-number">
                                        <!-- song information -->
                                        <div class="song-info">
                                            <!-- song title -->
                                            <center>
                                                <h4>Nguwe Wedwa</h4>
                                            </center>
                                            <audio class="audio" id="audio" src="Amaphupho/Nguwe Wedwa.mp3" controls onclick="toggleTrack();"></audio>
                                            <center>
                                                <p><strong>Album</strong>: Amaphupho &nbsp;|&nbsp; <strong>Type</strong>: Afro Pop &nbsp;</p>
                                            </center>
                                        </div>

                                        <div class="clearfix"></div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ hero end -->

        <!-- featured abbum -->
        <div class="featured pad" id="featuredalbum">
            <div class="container">
                <!-- default heading -->
                <div class="default-heading">
                    <!-- heading -->
                    <h2>Meet the band</h2>
                </div>
                <!-- featured album elements -->
                <div class="featured-element">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <!-- featured item -->
                            <div class="featured-item ">
                                <!-- image container -->
                                <div class="figure">
                                    <!-- image -->
                                    <img class="img-responsive" src="img/featured/5.jpeg" alt="" />
                                    <!-- paragraph -->
                                    <p><strong>Name:</strong> Thapelo Mabunda
                                        <br>
                                        <strong>Alias:</strong> Dee d'voca sir
                                        <br> Producer
                                        <br> Song Writer
                                        <br> Founder
                                    </p>                                </div>
                                <!-- featured information -->
                                <div class="featured-item-info">
                                    <!-- featured title -->
                                    <h4>Dee d'voca sir</h4>
                                    <!-- horizontal line -->
                                    <hr />
                                    <!-- some responce from social medial or web likes -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- featured item -->
                            <div class="featured-item ">
                                <!-- image container -->
                                <div class="figure">
                                    <!-- image -->
                                    <img class="img-responsive" src="img/featured/2.jpeg" alt="" />
                                    <!-- paragraph -->
                                    <p><strong>Name:</strong> Thato Mokonyane
                                        <br>
                                        <strong>Alias:</strong> Thato M
                                    </p>                                </div>
                                <!-- featured information -->
                                <div class="featured-item-info">
                                    <!-- featured title -->
                                    <h4>Thato M</h4>
                                    <!-- horizontal line -->
                                    <hr />
                                    <!-- some responce from social medial or web likes -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- featured item -->
                            <div class="featured-item ">
                                <!-- image container -->
                                <div class="figure">
                                    <!-- image -->
                                    <img class="img-responsive" src="img/featured/3.jpeg" alt="" />
                                    <!-- paragraph -->
                                    <p><strong>Name:</strong> Kabelo Mmethi
                                        <br>
                                        <strong>Alias:</strong> KayBee
                                        <br> Singer-songwriter
                                        <br> Co-founder

                                    </p>
                                </div>
                                <!-- featured information -->
                                <div class="featured-item-info">
                                    <!-- featured title -->
                                    <h4>Kaybee</h4>
                                    <!-- horizontal line -->
                                    <hr />
                                    <!-- some responce from social medial or web likes -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- featured item -->
                            <div class="featured-item ">
                                <!-- image container -->
                                <div class="figure">
                                    <!-- image -->
                                    <img class="img-responsive" src="img/featured/4.jpeg" alt="" />
                                    <!-- paragraph -->
                                    <p><strong>Name:</strong> Mathuto Masombuka
                                        <br>
                                        <strong>Alias:</strong> Lady Mellow
                                        <br> Singer-songwriter
                                        <br> Co-founder

                                    </p>
                                </div>
                                <!-- featured information -->
                                <div class="featured-item-info">
                                    <!-- featured title -->
                                    <h4>Lady Mellow</h4>
                                    <!-- horizontal line -->
                                    <hr />
                                    <!-- some responce from social medial or web likes -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- featured item -->
                            <div class="featured-item ">
                                <!-- image container -->
                                <div class="figure" id="figure">
                                    <!-- image -->
                                    <img class="img-responsive" src="img/featured/1.jpeg" alt="" />
                                    <!-- paragraph -->
                                    <p><strong>Name:</strong> Neo Baloyi
                                        <br>
                                        <strong>Alias:</strong> Neo
                                        <br><strong>Instructions:</strong> Vocals
                                        <br>
                                    </p>
                                </div>
                                <!-- featured information -->
                                <div class="featured-item-info">
                                    <!-- featured title -->
                                    <h4>Neo</h4>
                                    <!-- horizontal line -->
                                    <hr />
                                    <!-- some responce from social medial or web likes -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!-- about -->
        <div class="about" id="team">
            <div class="container">
                <!-- default heading -->
                <div class="default-heading">
                    <!-- heading -->
                    <h2>Photos</h2>
                </div>
                <!-- about what we are like content -->

            </div>
            <!-- our team -->
            <div class="team">
                <div class="container">
                    <!-- Team Member's Details -->
                    <div class="team-content">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-one">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/redcar.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-two">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/logo.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-three">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/Img-B.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-four">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/white logo.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- second row -->

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-one">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/band photo.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-two">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/band photo 1.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-three">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/Just chillin.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-four">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/1.jpeg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- third row -->
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-one">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/boys.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-two">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/Dee sir photo.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-three">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/freestyle.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-four">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/girls photo.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- fourth row -->

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-one">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/Img-A.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-two">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/Just chillin.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-three">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/red lights.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-four">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/Ngwana Koko album.jpg" alt="" />
                                        <!-- Hover block -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- fifith row -->
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-one">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/chillin.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-two">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/klipgat.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-three">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/restaurant chillin.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-four">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/kaybee photo 2.jpg" alt="" />
                                        <!-- Hover block -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- sixth row -->

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-one">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/kaybee photo 3.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-two">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/2.jpeg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-three">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/5.jpeg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-four">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/kaybee photo.jpg" alt="" />
                                        <!-- Hover block -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- seventh row -->

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-one">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/3.jpeg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-two">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/4.jpeg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-three">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/red lights.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-four">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/Ngwana Koko.jpg" alt="" />
                                        <!-- Hover block -->
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- eighth row -->

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-one">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/kaybee blue lights.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member  delay-two">
                                    <!-- Image Hover Block -->
                                    <div class="member-img">
                                        <!-- Image  -->
                                        <img class="img-responsive" src="img/assets/mathuto.jpg" alt="" />
                                        <!-- Hover block -->

                                    </div>
                                    <!-- Member Details -->

                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <!-- about end -->



            <!-- contact -->
            <div class="contact pad" id="contact">
                <div class="container">
                    <!-- default heading -->
                    <div class="default-heading">
                        <!-- heading -->
                        <h2>Contact Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <!-- contact item -->
                            <div class="contact-item ">
                                <!-- big icon -->
                                <i class="fa fa-street-view"></i>
                                <!-- contact details  -->
                                <span class="contact-details">1056 phase 6 itsoseng,<br>
                                Mabopane 0190</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <!-- contact item -->
                            <div class="contact-item ">
                                <!-- big icon -->
                                <i class="fa fa-wifi"></i>
                                <!-- contact details  -->
                                <span class="contact-details">themovementfamily842@gmail.com</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <!-- contact item -->
                            <div class="contact-item ">
                                <!-- big icon -->
                                <i class="fa fa-phone"></i>
                                <!-- contact details  -->
                                <span class="contact-details">067 802 7826</span>
                            </div>
                        </div>
                    </div>
                    <!-- form content -->
                    <div class="form-content ">
                        <!-- paragraph -->
                        <p>Get a hold of us below.</p>
                        <form role="form" id="contactForm" name="index" method="post" action="{{route('index.submit')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="contact" placeholder="Enter phone">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" name="msg" rows="9" placeholder="Enter message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-theme">Send Message</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
            <!-- contact end -->

            <!-- footer -->
            <footer>
                <div class="container">
                    <!-- social media links -->
                    <div class="social">
                        <a class="h-facebook" href="https://m.facebook.com/The-Movement-SA-100583651755768/"><i class="fa fa-facebook"></i></a>
                        <a class="h-google" href="https://youtu.be/iUHZNHzYUm0"><i class="fa fa-youtube"></i></a>

                    </div>
                    <!-- copy right -->
                    <p class="copy-right">&copy; copyright 2021, All rights are reserved.</p>
                </div>
            </footer>
            <!-- footer end -->

            <!-- Scroll to top -->
            <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>

        </div>
</body>

</html>