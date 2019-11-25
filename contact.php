<?php include_once("components/header.php") ?>
<div>
    <div>
        <?php include_once("components/navbar.php") ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h1 class="my-4">CodersX</h1>
                    <div class="list-group"><a class="list-group-item active" href="/">All</a><a class="list-group-item" href="/">Apple</a><a class="list-group-item" href="/">Nokia</a><a class="list-group-item" href="/">Fmobile</a><a class="list-group-item" href="/">Vinsmart</a><a class="list-group-item" href="/">Samsung</a></div>
                </div>
                <div class="col-lg-9">
                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="/carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="/carouselExampleIndicators" data-slide-to="1" class=""></li>
                            <li data-target="/carouselExampleIndicators" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox" style="height: 350px;">
                            <div class="carousel-item active"><img class="d-block img-fluid" src="https://hoanghamobile.com/tin-tuc/wp-content/uploads/2018/02/T2-T%E1%BA%BFt-Sale-t%E1%BB%95ng-fb-Ads-803x420.png" alt="First slide"></div>
                            <div class="carousel-item"><img class="d-block img-fluid" src="http://www.mobiistar.vn/wp-content/uploads/2015/10/banner800x400.jpg" alt="Second slide"></div>
                            <div class="carousel-item"><img class="d-block img-fluid" src="http://www.techone.vn/image/cache/data/thuy/anh-banner-qc/pk-mua-3-tang-1.png" alt="Third slide"></div>
                        </div><a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                    </div>
                    <div>
                        <div class="jumbotron">
                            <section class="page-section" id="contact">
                                <div class="container">
                                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 mx-auto">
                                            <form name="sentMessage" id="contactForm" novalidate="">
                                                <div class="control-group">
                                                    <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Name</label><input class="form-control" id="name" type="text" placeholder="Name" required="" data-validation-required-message="Please enter your name.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Email Address</label><input class="form-control" id="email" type="email" placeholder="Email Address" required="" data-validation-required-message="Please enter your email address.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Phone Number</label><input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="" data-validation-required-message="Please enter your phone number.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Message</label><textarea class="form-control" id="message" rows="5" placeholder="Message" required="" data-validation-required-message="Please enter a message."></textarea>
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div><br>
                                                <div id="success"></div>
                                                <div class="form-group"><button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <footer class="footer text-center" style="margin-top: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Location</h4>
                            <p class="lead mb-0">2215 John Daniel Drive<br>Clark, MO 65243</p>
                        </div>
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Around the Web</h4><a class="btn btn-outline-light btn-social mx-1" href="/"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="/"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="/"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="/"><i class="fab fa-fw fa-dribbble"></i></a>
                        </div>
                        <div class="col-lg-4">
                            <h4 class="text-uppercase mb-4">About Freelancer</h4>
                            <p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by<a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                        </div>
                    </div>
                </div>
            </footer>
            <footer class="py-5 bg-dark">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright © Your Website 2019</p>
                </div>
            </footer>
        </div>
    </div>
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>