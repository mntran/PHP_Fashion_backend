<?php require('views/header.php'); session_start();?>
<div class="body">
    <div role="main" class="main">
        <section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>About Us</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-right">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--div class="container pb-1">

            <div class="row pt-4">
                <div class="col">
                    <div class="overflow-hidden mb-3">
                        <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                            <span>The New Way to </span>
                            <span class="word-rotator-words bg-primary">
                                <b class="is-visible">Success</b>
                                <b>Advance</b>
                                <b>Progress</b>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-10">
                    <div class="overflow-hidden">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Sociis natoque penatibus et magnis dis parturient montes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="450">
                    <a href="#" class="btn btn-modern btn-primary mt-1">Join Our Team!</a>
                </div>
            </div>
        </div-->
        <section class="section section-default border-0 my-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750">
            <div class="container py-4">

                <div class="row align-items-center">
                    <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                        <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                            <div>
                                <img alt="" class="img-fluid" src="content/img/generic/blue.jpg">
                            </div>
                            <!--div>
                                <img alt="" class="img-fluid" src="content/img/generic/generic-corporate-3-3-full.jpg">
                            </div-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
                        </div>
                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Our company started from similar experiences finding fashion inspirations on the internet. This was the case with four to seven t-shirts any of us owned at any point in time.</p>
                        <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Our goal is to provide a community where you can find new fashion inspirations with the things in your closet. This is Clothing in Style - Four to Seven Tee. Or CIS 4270 for short.</p>
                    </div>
                </div>

            </div>
        </section>

        <div class="container">

            <!--div class="row mt-5 py-3">
                <div class="col-md-6">
                    <div class="toggle toggle-primary toggle-simple m-0" data-plugin-toggle>
                        <section class="toggle active mt-0">
                            <label>Our Vision</label>
                            <div class="toggle-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. Etiam nec viverra arcu. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>Our Mission</label>
                            <div class="toggle-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor.</p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="progress-bars">
                        <div class="progress-label">
                            <span class="text-1">HTML/CSS</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%">
                                <span class="progress-bar-tooltip">100%</span>
                            </div>
                        </div>
                        <div class="progress-label">
                            <span class="text-1">Design</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="300">
                                <span class="progress-bar-tooltip">85%</span>
                            </div>
                        </div>
                        <div class="progress-label">
                            <span class="text-1">WordPress</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="75%" data-appear-animation-delay="600">
                                <span class="progress-bar-tooltip">75%</span>
                            </div>
                        </div>
                        <div class="progress-label">
                            <span class="text-1">Photoshop</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="900">
                                <span class="progress-bar-tooltip">85%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col py-4">
                    <hr class="solid">
                </div>
            </div-->
            <div class="row">
                <div class="col-md-8 mx-md-auto text-center">

                    <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-2">Our <strong class="font-weight-extra-bold">History</strong></h2>
                    <p>How we started, our progress, and milestone moments.</p>

                    <section class="timeline" id="timeline">
                        <div class="timeline-body">
                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">September</h3>
                            </div>

                            <article class="timeline-box left text-left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <img alt="" class="img-fluid" src="content/img/history/big-brain-time-1.jpg" />
                                    <h3 class="font-weight-bold text-3 mt-3 mb-1">Big brain time</h3>
                                    <p class="mb-0 text-2">Assembled the team in 5 minutes. Started to big brain ideas for this website and claimed the domain name fast.</p>
                                </div>
                            </article>

                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">October</h3>
                            </div>

                            <article class="timeline-box right text-left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <img alt="" class="img-fluid" src="content/img/history/integration.jpg" />
                                    <h3 class="font-weight-bold text-3 mt-3 mb-1">Integration by parts</h3>
                                    <p class="mb-0 text-2">Slowly became intellectuals with each class and assigned videos. Integrated what we learned in class and put it into our website, part by part.</p>
                                </div>
                            </article>

                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">November</h3>
                            </div>

                            <article class="timeline-box left text-left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <img alt="" class="img-fluid" src="content/img/history/flavor-town.jpg" />
                                    <h3 class="font-weight-bold text-3 mt-3 mb-1">"Welcome to Flavor Town"</h3>
                                    <p class="mb-0 text-2">Things started to get spicy in November. The debugging and syntax fixing got spicy where we almost thought we were at Flavor Town.</p>
                                </div>
                            </article>

                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">December</h3>
                            </div>

                            <article class="timeline-box right text-left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <img alt="" class="img-fluid" src="content/img/history/launch.jpg" />
                                    <h3 class="font-weight-bold text-3 mt-3 mb-1">Launch!</h3>
                                    <p class="mb-0 text-2">For better or worse, we demonstrated our website to the public. Launching this website should be (hopefully) for the greater good.</p>
                                </div>
                            </article>

                        </div>
                    </section>

                </div>
            </div>

        </div-->

        <section class="section section-default border-0 my-5">
            <div class="container py-4">

                <div class="row">
                    <div class="col pb-4 text-center">
                        <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-2">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
                        <p>Gotta give credit to the people who worked on this website.</p>
                    </div>
                </div>
                <div class="row pb-4 mb-2">
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                        <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <a href="about-me.html">
                                    <img src="content/img/team/quentin.jpg" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Kwan Tai (Quentin) Ng</span>
                                        <span class="thumb-info-type">Tech lead</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Likes fashion a lot and likes to experiment with multiple fashion brands.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <a href="about-me.html">
                                    <img src="content/img/team/wesleyN.jpg" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Wesley Nguyen</span>
                                        <span class="thumb-info-type">Validations lead</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Likes comfortable, but hip and trendy clothes.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <a href="about-me.html">
                                    <img src="content/img/team/michelleT.jpg" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Michelle Tran</span>
                                        <span class="thumb-info-type">UX & UI lead</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Tries to be experimental with fashion, but it's a hit or miss.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                        <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <a href="about-me.html">
                                    <img src="content/img/team/vincent.jpg" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Vincent Vu</span>
                                        <span class="thumb-info-type">Security lead</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Prefers comfy clothes most of the time, cause form over fashion.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!--div class="container">
            <div class="row py-5 my-5">
                <div class="col">
            
                    <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                        <div>
                            <img class="img-fluid opacity-2" src="content/img/logos/logo-1.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="content/img/logos/logo-2.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="content/img/logos/logo-3.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="content/img/logos/logo-4.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="content/img/logos/logo-5.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="content/img/logos/logo-6.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="content/img/logos/logo-4.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="content/img/logos/logo-2.png" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div-->

    </div>
</div>

<?php require('views/footer.php'); ?>
