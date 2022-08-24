<?php include 'include/head.php'; ?>

<body>
    <?php include 'include/header.php'; ?>
    <style>
        * {
            box-sizing: border-box;
        }

        .book-section {
            height: 100vh;
            width: 100%;
            padding: 40px 0;
            text-align: center;
        }

        .book-section>.container {
            height: 400px;
            width: 500px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2%;
            margin-bottom: 30px;
            perspective: 1200px;
        }

        .container>.right {
            position: absolute;
            height: 100%;
            width: 50%;
            transition: 0.7s ease-in-out;
            transform-style: preserve-3d;
        }

        .book-section>.container>.right {
            right: 0;
            transform-origin: left;
            border-radius: 10px 0 0 10px;
        }

        .right>figure.front,
        .right>figure.back {
            margin: 0;
            height: 100%;
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            background-size: 200%;
            background-repeat: no-repeat;
            backface-visibility: hidden;
            background-color: white;
            overflow: hidden;
        }

        .right>figure.front {
            background-position: right;
            border-radius: 0 10px 10px 0;
            box-shadow: 2px 2px 15px -2px rgba(0, 0, 0, 0.2);
        }

        .right>figure.back {
            background-position: left;
            border-radius: 10px 0 0 10px;
            box-shadow: -2px 2px 15px -2px rgba(0, 0, 0, 0.2);
            transform: rotateY(180deg);
        }

        .flip {
            transform: rotateY(-180deg);
        }

        .flip::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
            width: 100%;
            height: 100%;
            border-radius: 0 10px 10px 0;
            background-color: rgba(0, 0, 0, 0.1);
        }

        .book-section>button {
            border: 2px solid #ef9f00;
            background-color: transparent;
            color: #ef9f00;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
            transition: 0.3s ease-in-out;
        }

        .book-section>button:focus,
        .book-section>button:active {
            outline: none;
        }

        .book-section>p {
            color: rgba(0, 0, 0, 0.7);
            font-family: calibri;
            font-size: 24px;
        }

        .book-section>p>a {
            text-decoration: none;
            color: #ef9f00;
        }

        .book-section>button:hover {
            background-color: #ef9f00;
            color: #fff;
        }

        .front#cover,
        .back#back-cover {
            background-color: #ffcb63;
            font-family: calibri;
            text-align: left;
            padding: 0 30px;
        }

        .front#cover h1 {
            color: #fff;
        }

        .front#cover p {
            color: rgba(0, 0, 0, 0.8);
            font-size: 14px;
        }

        h1.the-heading {
            font-size: 28px;
            padding-top: 100px;
        }

        .img-width img {
            width: 100%;
        }

        p.book-p {
            text-align: left;
            padding: 10px;
        }
    </style>

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>About Us</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Join Us</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <!-- book Section -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="book-section">
                    <div class="container">
                        <div class="right">
                            <figure class="back" id="back-cover"></figure>
                            <figure class="front" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/angry_man.jpg);"></figure>
                        </div>
                        <div class="right">
                            <figure class="back" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/angry_man.jpg);"></figure>
                            <figure class="front" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/sunset_landscape.jpg);"></figure>
                        </div>
                        <div class="right">
                            <figure class="back" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/sunset_landscape.jpg);">
                                <div class="img-width">
                                    <img src="img/proposal.png">
                                </div>
                                <p class="book-p">By connecting social enthusiast in and around his campus to the Centres Network.

                                    Preseting Proposal to Local Bodies/Municipality/Public School.</p>
                            </figure>
                            <figure class="front" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/intex_speakers.jpg);">
                                <div class="img-width">
                                    <img src="img/reach.png">
                                </div>
                                <p class="book-p">By reaching out local people/school for implementing planned projects in his locality/college.</p>

                            </figure>
                        </div>
                        <div class="right">
                            <figure class="back" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/intex_speakers.jpg);">
                                <h3>How can Ram help us?</h3>
                                <div class="img-width">
                                    <img src="img/research.png">
                                </div>
                                <p class="book-p">By participating in initial research work before implementing any social cause.</p>
                            </figure>
                            <figure class="front" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/doraemon_nobita_aged.jpg);">
                                <h3>What does Ram need to have?</h3>
                                <div class="img-width">
                                    <img src="img/page5.png">
                                </div>
                                <p class="book-p">Determination and dedication to bring a change in society.
                                    Can devote around 7 hours per week.</p>
                                <p class="book-p">Is willing to take up responsibility and fulfill them truthfully.</p>
                            </figure>
                        </div>
                        <div class="right">
                            <figure class="back" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/doraemon_nobita_aged.jpg);">
                                <div class="img-width">
                                    <img src="img/ram3.png">
                                </div>
                                <p class="book-p">He knows how to solve a theoretical problem but he never got a chance to work on the real-life problem.</p>
                            </figure>
                            <figure class="front" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/narendra_modi_caricature.jpg);">
                                <div class="img-width">
                                    <img src="img/ram2.png">
                                </div>
                                <p class="book-p">Ram feels helpless because neither he has a team nor guidance to solve these problems. He wants to discuss his ideas but he doesn�t know where to go.</p>
                            </figure>
                        </div>
                        <div class="right">
                            <figure class="back" style="background-image: url('http://artisticdesigning.com/Drawings/Photoshopped/narendra_modi_caricature.jpg');">
                                <div class="img-width">
                                    <img src="img/ram1.png">
                                </div>
                                <p class="book-p">Hello, he is Ram, a college student. He sees some social problems around locality. Instead of blaming governments he wants to take control and do something for society.</p>
                            </figure>
                            <figure class="front" id="cover">
                                <h1 class="the-heading">THE STORY OF A COLLEGE STUDENT</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, modi.</p>
                            </figure>
                        </div>
                    </div>
                    <button onclick="turnLeft()">Prev</button> <button onclick="turnRight()">Next</button>
                    <br />
                </div>

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div> -->

    <!-- book Section -->

    <section class="team-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading text-center ">
                <h2>Our Network</h2>
                <span class="heading-border"></span>

                <!-- book Section -->
                <div class="row">

                    <div class="col-md-4 col-sm-2 col-xs-2">
                        <div class="book-section" style="margin-top: 160px;">
                            <button onclick="turnLeft()">
                                << /button>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-8 col-xs-8">
                        <div class="book-section">
                            <!-- <p>Illustrations by <a href="http://artisticdesigning.com" target="_blank">Nidhanshu Sharma</a></p> -->
                            <div class="container">
                                <div class="right">
                                    <figure class="back" id="back-cover"></figure>
                                    <figure class="front" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/angry_man.jpg);"></figure>
                                </div>
                                <div class="right">
                                    <figure class="back" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/angry_man.jpg);"></figure>
                                    <figure class="front" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/sunset_landscape.jpg);"></figure>
                                </div>
                                <div class="right">
                                    <figure class="back" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/sunset_landscape.jpg);">
                                        <div class="img-width">
                                            <img src="img/proposal.png">
                                        </div>
                                        <p class="book-p">By connecting social enthusiast in and around his campus to the Centres Network.

                                            Preseting Proposal to Local Bodies/Municipality/Public School.</p>
                                    </figure>
                                    <figure class="front" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/intex_speakers.jpg);">
                                        <div class="img-width">
                                            <img src="img/reach.png">
                                        </div>
                                        <p class="book-p">By reaching out local people/school for implementing planned projects in his locality/college.</p>
                                    </figure>
                                </div>
                                <div class="right">
                                    <figure class="back" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/intex_speakers.jpg);">
                                        <h3>How can Ram help us?</h3>
                                        <div class="img-width">
                                            <img src="img/research.png">
                                        </div>
                                        <p class="book-p">By participating in initial research work before implementing any social cause.</p>
                                    </figure>
                                    <figure class="front" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/doraemon_nobita_aged.jpg);">
                                        <h3>What does Ram need to have?</h3>
                                        <div class="img-width">
                                            <img src="img/page5.png">
                                        </div>
                                        <p class="book-p">Determination and dedication to bring a change in society.
                                            Can devote around 7 hours per week.</p>
                                        <p class="book-p">Is willing to take up responsibility and fulfill them truthfully.</p>
                                    </figure>
                                </div>
                                <div class="right">
                                    <figure class="back" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/doraemon_nobita_aged.jpg);">
                                        <div class="img-width">
                                            <img src="img/ram3.png">
                                        </div>
                                        <p class="book-p">He knows how to solve a theoretical problem but he never got a chance to work on the real-life problem.</p>
                                    </figure>
                                    <figure class="front" style="background-image: url(http://artisticdesigning.com/Drawings/Photoshopped/narendra_modi_caricature.jpg);">
                                        <div class="img-width">
                                            <img src="img/ram2.png">
                                        </div>
                                        <p class="book-p">Ram feels helpless because neither he has a team nor guidance to solve these problems. He wants to discuss his ideas but he doesn�t know where to go.</p>
                                    </figure>
                                </div>
                                <div class="right">
                                    <figure class="back" style="background-image: url('http://artisticdesigning.com/Drawings/Photoshopped/narendra_modi_caricature.jpg');">
                                        <div class="img-width">
                                            <img src="img/ram1.png">
                                        </div>
                                        <p class="book-p">Hello, he is Ram, a college student. He sees some social problems around locality. Instead of blaming governments he wants to take control and do something for society.</p>
                                    </figure>
                                    <figure class="front" id="cover">
                                        <h1 class="the-heading">THE STORY OF A COLLEGE STUDENT</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, modi.</p>
                                    </figure>
                                </div>
                            </div>

                            <br />
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-2 col-xs-2">
                        <div class="book-section" style="margin-top: 160px;">
                            <button onclick="turnRight()">></button>
                        </div>
                    </div>
                </div>
                <!-- book Section -->
                <!-- <p>We are aiming to build a network of like-minded individuals whose passion is to make an impact through solving complex social problems. The network will not only consist of students but also mentors who can guide them achieve their goals and help them throughout the process. We are continously expanding the network with a goal to reach each and every college throughout the country.</p> -->
            </div>


            <!-- /Section Heading -->

            <div class="team-wrapper row">
                <div class="section-heading text-center ">
                    <div class="col-md- col-sm-4 xs-padding" style="margin-top: -200px;">
                        <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">

                        <a href="#">
                                <div class="testimonial-item">
                                    <div class="testi-footer-center" style="padding: 60px;">
                                        <img src="gopali-img/ram/1.png" alt="profile">
                                        <!-- <h4>Youth Empowerment </h4> -->
                                    </div>
                                    <br>
                                    <p>1. By providing him a Platform where he can work with like-minded individuals.</p>
                                    <br>
                                    <br>

                                </div>
                            </a>

                            <a href="#">
                                <div class="testimonial-item">
                                    <div class="testi-footer-center" style="padding: 60px;">
                                        <img src="gopali-img/ram/2.png" alt="profile">
                                        <!-- <h4>Youth Empowerment </h4> -->
                                    </div>
                                    <br>
                                    <p>2. By Bringing out the leader in him.</p>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </a>

                            <a href="#">
                                <div class="testimonial-item">
                                    <div class="testi-footer-center" style="padding: 60px;">
                                        <img src="gopali-img/ram/3.png" alt="profile">
                                        <!-- <h4>Youth Empowerment </h4> -->
                                    </div>
                                    <br>
                                    <p>3. To form a team and develop Team - bonding among his college mates.</p>
                                    <br>
                                    <br>

                                </div>
                            </a>

                            <a href="#">
                                <div class="testimonial-item">
                                    <div class="testi-footer-center" style="padding: 60px;">
                                        <img src="gopali-img/ram/4.png" alt="profile">
                                        <!-- <h4>Youth Empowerment </h4> -->
                                    </div>
                                    <p>4. We plan activities at the ground level of any problem. While performing any activities you may face many real time challenges where we will be there to Guide you.</p>
                                </div>
                            </a>

                            <a href="#">
                                <div class="testimonial-item">
                                    <div class="testi-footer-center" style="padding: 60px;">
                                        <img src="gopali-img/ram/5.png" alt="profile">
                                        <!-- <h4>Youth Empowerment </h4> -->
                                    </div>
                                    <p>5. By involving him in a discussion of nation-wide activities for Social issues where he will get a chance to brainstorm the ideas .</p>
                                    <br>
                                </div>
                            </a>

                            <a href="#">
                                <div class="testimonial-item">
                                    <div class="testi-footer-center" style="padding: 60px;">
                                        <img src="gopali-img/ram/6.png" alt="profile">
                                        <!-- <h4>Youth Empowerment </h4> -->
                                    </div>
                                    <br>
                                    <p>6. By allowing him to lead an organisation that represents his city or college in a nation wide platform.</p>
                                    <br>
                                </div>
                            </a>

                            <a href="#">
                                <div class="testimonial-item">
                                    <div class="testi-footer-center" style="padding: 60px;">
                                        <img src="gopali-img/ram/7.png" alt="profile">
                                        <!-- <h4>Youth Empowerment </h4> -->
                                    </div>
                                    <br>
                                    <p>7. By nurturing him to gain soft skills and management skills which are required to perform any social based activity.</p>
                                    <br>
                                </div>
                            </a>

                        </div>
                    </div>

                </div>

                <div class="team-wrapper row">
                    <div class="col-lg-6 sm-padding">
                        <div class="team-wrap row">
                            <div class="col-md-6">
                                <div class="team-details">
                                    <img src="img/team-1.jpg" alt="team">
                                    <div class="hover">
                                        <h3>Social Worker <span></span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-1 -->
                            <div class="col-md-6">
                                <div class="team-details">
                                    <img src="img/team-2.jpg" alt="team">
                                    <div class="hover">
                                        <h3>College Student<span></span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-2 -->
                            <div class="col-md-6">
                                <div class="team-details">
                                    <img src="img/team-3.jpg" alt="team">
                                    <div class="hover">
                                        <h3>College Professor <span></span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-3 -->
                            <div class="col-md-6">
                                <div class="team-details">
                                    <img src="img/team-4.jpg" alt="team">
                                    <div class="hover">
                                        <h3>College<span></span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-4 -->
                        </div>
                    </div>
                    <div class="col-lg-6 sm-padding">
                        <div class="team-content">
                            <h2>Who can join us?</h2>
                            <h3>Join your hand with us for a better life and beautiful future.</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            <ul class="check-list">
                                <li><i class="fa fa-check"></i>Social Worker</li>
                                <li><i class="fa fa-check"></i>College Student</li>
                                <li><i class="fa fa-check"></i>College Professor</li>
                                <li><i class="fa fa-check"></i>College</li>
                                <!-- <li><i class="fa fa-check"></i>Joining is tottaly free. We dont need any money from you.</li> -->
                            </ul>
                            <a href="#" class="default-btn">Join With Us</a>
                        </div>
                    </div>
                </div>
            </div>
    </section><!-- /Team Section -->



    <!-- <section class="promo-section-2 padding bd-bottom ">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Our Story</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://www.pngkey.com/png/full/873-8730101_established-professionals-circle-handshake-icon.png" alt="prmo icon" style="height: 50px;">
                        <h3>Established</h3>
                        <p>Established in 2002 with a mission to improve the living standards of the people of Gopali like villages.</p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://www.pngkey.com/png/full/127-1277532_middle-school-education-icon-too-busy-to-be.png" alt="prmo icon" style="height: 50px;">
                        <h3>Stepped into Education</h3>
                        <p>Embarked in an education program Jagriti Vidya Mandir in a rented building, focused upon providing quality education.</p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://icon-library.com/images/light-bulb-icon-transparent/light-bulb-icon-transparent-6.jpg" alt="prmo icon" style="height: 50px;">
                        <h3>Light</h3>
                        <p>GYWS came up with the initiative named LiGHT to reach masses all over India, to reciprocate similar models of social upliftment throughout the nation.</p>

                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section class="promo-section-2 padding bd-bottom ">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://www.pngkey.com/png/full/73-730394_admin-approved-user-registration-user-registration-icon-png.png" alt="prmo icon" style="height: 50px;">
                        <h3>Registered</h3>
                        <p>Registered under the West Bengal Societies Registration Act of 1961.</p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://static.thenounproject.com/png/3965105-200.png" alt="prmo icon" style="height: 50px;">
                        <h3>JVM Foundation</h3>
                        <p>2 acres of land was purchased, and the foundation of Jagriti Vidya Mandir was laid. </p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://cdn-icons-png.flaticon.com/512/569/569225.png" alt="prmo icon" style="height: 50px;">
                        <h3>Hostel Construction</h3>
                        <p>Hostel Construction to provide learning environment to deprived children, begin in Jagriti Vidya Mandi.</p>

                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="https://gyws.org/gyws/assets/img/new_website_img/about/founder.jpg" alt="profile">
                        <h3> Mr. Mrinal Kanti Bhanja <span>President (Gopali Youth Welfare Society)</span></h3>
                        <p>
                            There is a natural law, a Divine law that obliges you and me to believe the sufferings of the distressed and the destitute. A service for the poor is a supreme virtue and the great channel.</p>

                    </div>
                </div>
                <div class="col-md-8" style="text-align: justify;">
                    <h3> Founder's Message</h3>
                    <p>
                        There is a natural law, a Divine law that obliges you and me to believe the sufferings of the distressed and the destitute. A service for the poor is a supreme virtue and the great channel through which the mercy of God is passed on to mankind.
                        <br><br>
                        As stewards of GOPALI YOUTH WELFARE SOCIETY, the board and staff of Society are committed to adhering as closely as possible to his intentions, as reflected in our guiding principle. GYWS is a rural-based registered organization by and for the people. Despite the many ups and downs, it has pulled on with real favor to serve the disadvantaged, the underprivileged, the poor and the needy.
                        <br><br>
                        Our journey would not have been smooth if it was not for the support by the wholehearted participation and cooperation from the community as well as from the other partners (agencies) have helped a lot to sustain the activities. So, we take this occasion to extend our heartfelt gratitude to one and all, who, in whatever capacity, might have contributed to one's might to sustain our noble endeavour.
                    </p>


                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->


    <section class="promo-section-2 padding bd-bottom">
        <div class="container-fluid">
            <div class="section-heading text-center mb-40">
                <h2>Mission & Vision</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div class="row">
                <div class="col-md-6 mission">
                    <h3>JVM Foundation</h3>
                    <p>We aim to develop an ecosystem for the youth to provide them with skills, resources and motivation to achieve sustainable development goals. </p>
                </div>
                <div class="col-md-6 mission1">
                    <center>
                        <img src="https://gyws.org/gyws/assets/img/new_website_img/about/mission.png" alt="">
                    </center>
                </div>

                <div class="col-md-6 mission1">
                    <center>
                        <img src="https://gyws.org/gyws/assets/img/new_website_img/about/vision.png" alt="">
                    </center>
                </div>
                <div class="col-md-6 mission2">
                    <h3>VISION</h3>
                    <p>We exist to improve the social and economic condition in and around Kharagpur and inspire and guide the youth to replicate our learnings across the nation.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Members</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div class="team-wrapper row">
                <div class="col-lg-12 sm-padding">
                    <div class="team-wrap row">
                        <div class="col-md-4 xs-padding">
                            <div class="team-details">
                                <img src="https://gyws.org/gyws/assets/img/new_website_img/about/founder.jpg" alt="team">
                                <div class="hover">
                                    <h3>Mr. Mrinal Kanti Bhanja <span>President</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-1 -->
                        <div class="col-md-4 xs-padding">
                            <div class="team-details">
                                <img src="https://gyws.org/gyws/assets/img/new_website_img/about/Pradyun%20D.jpg" alt="team">
                                <div class="hover">
                                    <h3>Pradyun D <span> General Secretary</span></h3>
                                </div>
                            </div>

                        </div><!-- /Team-2 -->
                        <div class="col-md-4 xs-padding">
                            <div class="team-details">
                                <img src="https://gyws.org/gyws/assets/img/new_website_img/about/Tanishka%20Agarwal.jpg" alt="team">
                                <div class="hover">
                                    <h3>Tanishka Agarwal <span>Vice President</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-3 -->

                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Team Section -->


    <?php include 'include/footer.php'; ?>