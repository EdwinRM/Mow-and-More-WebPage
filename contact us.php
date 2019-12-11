<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mow & More</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="img/icon.png">
    <link href="./css/lightbox.css" rel="stylesheet">
    <script src="./js/lightbox.js"></script>
</head>

<body id="top" style="background-image: url('./img/g1.jpg');  background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Mow & More </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbarul">

                <li class="nav-item active nav-item mx-0 mx-lg-1">
                    <a class="nav-link navtext" href="index.html">Home</a>
                </li>
                <li class="nav-item nav-item mx-0 mx-lg-1 dropdown navtext">
                    <a class="nav-link" data-toggle="dropdown" href="paginas/services.html">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item portfolio-link" data-toggle="modal"
                                href="#portfolioModal1">Lawncare</a></li>
                        <li><a class="dropdown-item portfolio-link" data-toggle="modal"
                                href="#portfolioModal2">Landscaping</a></li>
                        <li><a class="dropdown-item portfolio-link" data-toggle="modal"
                                href="#portfolioModal3">Leaves</a></li>
                        <li><a class="dropdown-item portfolio-link" data-toggle="modal" href="#portfolioModal4">Hauling
                                & Removal</a></li>
                        <li><a class="dropdown-item portfolio-link" data-toggle="modal" href="#portfolioModal5">Power
                                Washing</a>
                        </li>
                        <li><a class="dropdown-item portfolio-link" data-toggle="modal"
                                href="#portfolioModal6">Chrismast
                                lights</a></li>
                    </ul>
                </li>
                <li class="nav-item active nav-item mx-0 mx-lg-1">
                    <a class="nav-link navtext" href="paginas/about.html">About</a>
                </li>
                <li class="nav-item active nav-item mx-0 mx-lg-1">
                    <a class="nav-link navtext" href="paginas/gallery.html">
                        Gallery
                    </a>
                </li>
                <li class="nav-item active nav-item mx-0 mx-lg-1">
                    <a class="nav-link navtext" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contact Section -->
    <section class="page-section m-5" id="contact">
        <div class="container">
            <h2 class="text-center text-uppercase ">Contact us
            </h2>
            <!-- Contact Section Form -->
            <div class="row">
                <div class="col-lg-8 mx-auto mt-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Name</label>
                                <input class="form-control" id="name" type="text" placeholder="Name" required="required"
                                    data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Email Address</label>
                                <input class="form-control" id="email" type="email" placeholder="Email Address"
                                    required="required"
                                    data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Phone Number</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Phone Number"
                                    required="required"
                                    data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group text-center center">
                            <button type="submit" class="btn btn-danger btn-lg" id="sendMessageButton">Send</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Lawncare</h2>
                                <p class="item-intro text-muted">Mow/ Mow&bag.</p>
                                <img class="img-fluid d-block mx-auto" src="img/m0.jpeg" alt="">
                                <!-- Page Content -->
                                <div class="container">
                                    <hr class="mt-2 mb-5">
                                    <div class="row text-center">
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/m1.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/m2.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/m3.jpeg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.container -->
                                <p>The mow services that we offer is a great quality service it includes mow, weed
                                    eating and blowing the grass out of the driveways, front porch, back patio, walk
                                    sides, flowerbeds (if it need it) or anything that will need to be blow at the end
                                    of the job to make sure your house looks great every time we mowed it. We also offer
                                    the service of Mowing and bagging the grass so the yard looks cleaner that is a good
                                    service for some Bermuda grass and mostly fescue grass. </p>
                                <ul class="list-inline">
                                    <li>Get in touch</li>
                                    <li>+1 479-320-7355</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button"
                                    style="background-color: #1d272b;">
                                    <i class="fas fa-times"></i>
                                    Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Landscaping </h2>
                                <p class="item-intro text-muted">Trimming, Mulching, Planting, Flower beds clean-up or
                                    installation </p>
                                <img class="img-fluid d-block mx-auto" src="img/l7.jpeg" alt="">
                                <!-- Page Content -->
                                <div class="container">
                                    <hr class="mt-2 mb-5">
                                    <div class="row text-center">
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/l1.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/l9.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/l3.jpeg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.container -->
                                <p>We offer a landscaping service that includes:
                                    Flowerbeds clean up such pulling or spraying weeds blowing or racking leaves, sticks
                                    or anything else that will be over the flowerbeds.
                                    Flowerbeds installations or We can replace the old metal edging only to make your
                                    flowerbeds like new again.
                                    Mulching: we offer a great quality mulch service with any mulch color you want it so
                                    that way your flowerbeds will look great and it will make your house look really
                                    nice too.
                                    Trimming: We can trim pretty much anything you have and needs to be trim; we will
                                    make sure your plants, shrubs (bushes) or trees will look beautiful every time we
                                    trimmed them to make your place look clean and beautiful all the time.
                                    Planting: we plant any type of plants like flowers, shrubs(bushes) , trees or
                                    anything else also transplanting some plants that you want to move to another place
                                    If there is something else you want us to do besides the things, we listed give us a
                                    call we can probably help you out thank you .
                                </p>
                                <ul class="list-inline">
                                    <li>Get in touch</li>
                                    <li>+1 479-320-7355</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button"
                                    style="background-color: #1d272b;">
                                    <i class="fas fa-times"></i>
                                    Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Leaves</h2>
                                <p class="item-intro text-muted">Leaf Removal/Clean-up service </p>
                                <img class="img-fluid d-block mx-auto" src="img/h1.jpeg" alt="">
                                <!-- Page Content -->
                                <div class="container">
                                    <hr class="mt-2 mb-5">
                                    <div class="row text-center">
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/h2.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/h3.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/h4.jpeg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.container -->
                                <p>We offer a leaf removal /clean-up service
                                    we make sure to get all the leaves picked up to make your house look clean and
                                    beautiful.
                                    You will be surprised how nice it will look after we have done, you can call us for
                                    a free estimate anytime, any day .
                                </p>
                                <ul class="list-inline">
                                    <li>Get in touch</li>
                                    <li>+1 479-320-7355</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button"
                                    style="background-color: #1d272b;">
                                    <i class="fas fa-times"></i>
                                    Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Hauling & Removal </h2>
                                <p class="item-intro text-muted">Low prices and flexible hours for you convenience haul
                                    off </p>
                                <img class="img-fluid d-block mx-auto" src="img/r3.jpeg" alt="">
                                <!-- Page Content -->
                                <div class="container">
                                    <hr class="mt-2 mb-5">
                                    <div class="row text-center">
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/r4.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/Hauling & Removal.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/r5.jpeg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.container -->
                                <p>We can handle almost everything you need to haul off
                                    We haul away things like : Old furniture, scrap metal or wood , trees, sticks and
                                    more.
                                    We can haul off a lot of things if you want to clean your front or back yard, we can
                                    work out a good prices and good time for your convenience
                                    Probably we didn’t listed everything but if you have something else you want us to
                                    haul off just give us a call I sure we can help you out.
                                </p>
                                <ul class="list-inline">
                                    <li>Get in touch</li>
                                    <li>+1 479-320-7355</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button"
                                    style="background-color: #1d272b;">
                                    <i class="fas fa-times"></i>
                                    Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Power washing </h2>
                                <p class="item-intro text-muted">Drive ways, patios, walls & more..</p>
                                <img class="img-fluid d-block mx-auto" src="img/a3.jpeg" alt="">
                                <!-- Page Content -->
                                <div class="container">
                                    <hr class="mt-2 mb-5">
                                    <div class="row text-center">
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/a1.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/a2.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/a4.jpeg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.container -->
                                <p>We offer power washing service
                                    Restore your concrete surfaces to their original look.
                                    We always try to provide a great service for a great prices
                                    We will make sure to do a great job and make you happy
                                    You won’t regret to contract our services
                                    We offer power washing service
                                    we can pressure wash
                                    Decks and Patios
                                    Porch
                                    drive ways steps,
                                    Pool Patio
                                    any concrete or wood surface with a great quality and low prices,
                                    just give us a call for a free estimates.
                                </p>
                                <ul class="list-inline">
                                    <li>Get in touch</li>
                                    <li>+1 479-320-7355</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button"
                                    style="background-color: #1d272b;">
                                    <i class="fas fa-times"></i>
                                    Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Christmas lights </h2>
                                <p class="item-intro text-muted">Professional lighting for your home or business </p>
                                <img class="img-fluid d-block mx-auto" src="img/c3.jpeg" alt="">
                                <!-- Page Content -->
                                <div class="container">
                                    <hr class="mt-2 mb-5">
                                    <div class="row text-center">
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/c2.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/g2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-thumbnail" src="img/Christmas lights.jpeg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.container -->
                                <p>We provide installation, maintenance, takedown and storage of your holiday’s lights
                                    We do roof line lighting, tree and bush lighting & more, we will make sure your
                                    house will look beautiful for this Christmas
                                    You don’t have to take a risk in the cold just sit down and relax while we
                                    transforming your house for the Christmas period.
                                    we will make sure you to make you proud of your Christmas decoration with our
                                    professional work if you give us a chance you wont regret it.
                                    Call for a free estimates.
                                </p>
                                <ul class="list-inline">
                                    <li>Get in touch</li>
                                    <li>+1 479-320-7355</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button"
                                    style="background-color: #1d272b;">
                                    <i class="fas fa-times"></i>
                                    Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">

                <!-- Footer Location -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">Arkansas,US
                        <br>Northwest Arkansas</p>
                </div>

                <!-- Footer Social Icons -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Social</h4>
                    <a class="btn btn-outline-light btn-social mx-1" target="_blank"
                        href="https://www.instagram.com/mowandmore_nwa/?hl=es-la">
                        <i class="fab fa-fw fa-instagram"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1" target="_blank"
                        href="https://www.facebook.com/Mowandmorenwa/?modal=admin_todo_tour">
                        <i class="fab fa-fw fa-facebook"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1 btn-envelope "
                        href="mailto:mowandmorenwa@gmail.com">
                        <i class="far fa-envelope"> </i>
                    </a>
                    <a class="btn  btn-social mx-1">
                        +1 479-320-7355
                    </a>

                </div>

                <!-- Footer About Text -->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About the web</h4>
                    <p>© 2019 Copyright: Mow & More |
                        <a style="font-size: 13px; color: #0b6db8;" target="_blank" href="http://www.edwinrm.com"><i>
                                Web Build by
                                EdwinRM</i></a></p>
                </div>

            </div>
        </div>
    </footer>
    <!-- Contact Form JavaScript -->
    <script src="./js/jqBootstrapValidation.js"></script>
    <script src="./js/contact_me.js"></script>
    <script src="./js/js.js"></script>
</body>

</html>