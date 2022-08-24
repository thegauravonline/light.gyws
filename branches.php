<?php
include 'include/connect.php';

if (isset($_GET['serch'])) {
    $newserch = $_POST['newserch'];
}

?>

<?php include 'include/head.php'; ?>
<link href="css/style.css" rel="stylesheet">

<body>
    <?php include 'include/header.php'; ?>

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Branches</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Branches</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->





    <!-- <section class="about-section bg-white bd-bottom padding">
        <div class="float-container">
            <div class="row about-wrap">
                <div class="col-md-4 xs-padding">
                    <div class="about-image">
                        <img src="img/about.png" alt="about image">
                    </div>
                </div>
                <div class="col-md-8 xs-padding">
                    <div class="container" style="margin-top:30px; margin-bottom:40px">
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>

                            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
                            <link rel="stylesheet" href="css/card.css">

                        </head>

                        <body style="background-color: #f9fcff;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="title-heading">
                                        Our Clusters
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Western Region</h4>
                                            <div class="card-image" style="color: #213661;">
                                                <img src="img/west.png" alt="west"></img>
                                                <i class="fas fa-laptop-code fa-5x"></i> 
                                            </div>
                                            <p class="card-text"><a href="">1. LiGHT Jaipur</a> <br>
                                                <a href="">2. LiGHT Gwalior Sithouli</a><br>
                                                <a href="">3. LiGHT Gwalior Thatipur</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Eastern Region</h4>
                                            <div class="card-image" style="color: #5e371b;">
                                                <img src="img/east.png" alt="east"></img>
                                                 <i class="fas fa-chalkboard-teacher fa-5x"></i> 
                                            </div>
                                            <p class="card-text"><a href="">1. LiGHT Raipur</a> <br>
                                                <a href="">2. LiGHT Sindri</a><br>
                                                <a href="">3. LiGHT Gaya</a> <br>
                                                <a href="">4. LiGHT Bhubaneshwar</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Southern Region</h4>
                                            <div class="card-image" style="color:#bc3330;">
                                                <img src="img/south.png" alt="south"></img>
                                                 <i class="fas fa-bullseye fa-5x"></i> 
                                            </div>
                                            <p class="card-text"><a href=""> LiGHT Wardha</a><br>
                                                <a href="">2. LiGHT Samvedna</a><br>
                                                <a href="">3. LiGHT Akola</a><br>
                                                <a href="">4. LiGHT Palakkad</a><br>
                                                <a href="">5. LiGHT Chennai</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </body>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- /About Section -->


    <!-- schedule Section -->

    <section class="schedule-section">

        <div class="anim-icons">

            <span class="icon icon-circle-4 wow zoomIn"></span>

            <span class="icon icon-circle-3 wow zoomIn"></span>

        </div>



        <div class="auto-container">

            <div class="sec-title text-center">

                <span class="title"></span>

                <h2>Timeline</h2>

            </div>



            <div class="schedule-tabs tabs-box">

                <div class="btns-box">

                    <!--Tabs Box-->

                    <ul class="tab-buttons clearfix">

                        <li class="tab-btn active-btn" data-tab="#tab-1">

                            <!-- <span class="day">Day 01</span> -->

                            <span class="date">2017</span>

                            <!-- <span class="month">Nov</span> 2022 -->

                        </li>



                        <li class="tab-btn" data-tab="#tab-2">

                            <!-- <span class="day">Day 02</span> -->

                            <span class="date">2018</span>

                            <!-- <span class="month">Nov</span> 2022 -->

                        </li>



                        <li class="tab-btn" data-tab="#tab-3">

                            <!-- <span class="day">Day 03</span> -->

                            <span class="date">2019</span>

                            <!-- <span class="month">Nov</span> 2022 -->

                        </li>

                        <li class="tab-btn" data-tab="#tab-4">

                            <!-- <span class="day">Day 01</span> -->

                            <span class="date">2020</span>

                            <!-- <span class="month">Nov</span> 2022 -->

                        </li>



                        <li class="tab-btn" data-tab="#tab-5">

                            <!-- <span class="day">Day 02</span> -->

                            <span class="date">2021</span>

                            <!-- <span class="month">Nov</span> 2022 -->

                        </li>



                        <li class="tab-btn" data-tab="#tab-6">

                            <!-- <span class="day">Day 03</span> -->

                            <span class="date">2022</span>

                            <!-- <span class="month">Nov</span> 2022 -->

                        </li>

                    </ul>

                </div>



                <div class="tabs-content">



                    <!--Tab-->

                    <div class="tab active-tab" id="tab-1">

                        <div class="schedule-timeline">

                            <!-- schedule Block -->

                            <!-- <h3>Will be updated soon</h3> -->

                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">Jan</div>

                                        <!-- <div class="speaker-info">

                                <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

                                <h5 class="name">Ashli Scroggy</h5>

                                <span class="designation">Founder & CEO</span>

                            </div> -->

                                        <h4><a href="">LiGHT Samvedna was established with the help of students from Govt. College of Engineering Aurangabad</a></h4>

                                        <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

                            <div class="btn-box">

                                <a href="event-detail.html" class="theme-btn">Read More</a>

                            </div> -->

                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>

                    <!--Tab-->

                    <div class="tab" id="tab-2">

                        <div class="schedule-timeline">


                            <!-- <h3>Will be updated soon</h3> -->
                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">Feb</div>

                                        <!-- <div class="speaker-info">

                                <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

                                <h5 class="name">Ashli Scroggy</h5>

                                <span class="designation">Founder & CEO</span>

                            </div> -->

                                        <h4><a href="">LiGHT Gaya was established with the help of students from Gaya College of Engineering</a></h4>

                                        <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

                            <div class="btn-box">

                                <a href="event-detail.html" class="theme-btn">Read More</a>

                            </div> -->

                                    </div>

                                </div>

                            </div>



                            <div class="schedule-block even">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">Mar</div>

                                        <!-- <div class="speaker-info">

                                <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

                                <h5 class="name">Ashli Scroggy</h5>

                                <span class="designation">Founder & CEO</span>

                            </div> -->

                                        <h4><a href="">LiGHT Chennai was established with the help of students from IIITDM Kancheepuram</a></h4>

                                        <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

                            <div class="btn-box">

                                <a href="event-detail.html" class="theme-btn">Read More</a>

                            </div> -->

                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>

                    <!--Tab-->

                    <div class="tab" id="tab-3">

                        <div class="schedule-timeline">


                            <!-- <h3>Will be updated soon</h3> -->
                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">Oct</div>

                                        <!-- <div class="speaker-info">

        <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

        <h5 class="name">Ashli Scroggy</h5>

        <span class="designation">Founder & CEO</span>

        </div> -->

                                        <h4><a href="">LiGHT Raipur was established with the help of students from NIT Raipur</a></h4>

                                        <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

        <div class="btn-box">

            <a href="event-detail.html" class="theme-btn">Read More</a>

        </div> -->

                                    </div>

                                </div>

                            </div>


                            <div class="schedule-block even">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">Nov</div>

                                        <!-- <div class="speaker-info">

            <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

            <h5 class="name">Ashli Scroggy</h5>

            <span class="designation">Founder & CEO</span>

        </div> -->

                                        <h4><a href="">LiGHT Pallakad was established with the help of students from IIT Pallakad, Kerala</a></h4>

                                        <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

        <div class="btn-box">

            <a href="event-detail.html" class="theme-btn">Read More</a>

        </div> -->

                                    </div>

                                </div>

                            </div>


                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">Nov</div>

                                        <!-- <div class="speaker-info">

        <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

        <h5 class="name">Ashli Scroggy</h5>

        <span class="designation">Founder & CEO</span>

         </div> -->

                                        <h4><a href="">LiGHT Jaipur was established with the help of students from MNIT Jaipur</a></h4>

                                        <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

        <div class="btn-box">

            <a href="event-detail.html" class="theme-btn">Read More</a>

        </div> -->

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <!--Tab-->

                    <div class="tab" id="tab-4">

                        <div class="schedule-timeline">


                            <!-- <h3>Will be updated soon</h3> -->
                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">Feb</div>

                                        <!-- <div class="speaker-info">

                                <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

                                <h5 class="name">Ashli Scroggy</h5>

                                <span class="designation">Founder & CEO</span>

                            </div> -->

                                        <h4><a href="">LiGHT Wardha was established in Bajaj Institute of Technology, Wardha</a></h4>

                                        <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

                            <div class="btn-box">

                                <a href="event-detail.html" class="theme-btn">Read More</a>

                            </div> -->

                                    </div>

                                </div>

                            </div>


                            <div class="schedule-block even">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">Apr</div>

                                        <!-- <div class="speaker-info">

                                <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

                                <h5 class="name">Ashli Scroggy</h5>

                                <span class="designation">Founder & CEO</span>

                            </div> -->

                                        <h4><a href="">LiGHT Gwalior Sithouli was established with the help of students of ITM Group of Institutions, Gwalior</a></h4>

                                        <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

                            <div class="btn-box">

                                <a href="event-detail.html" class="theme-btn">Read More</a>

                            </div> -->

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="tab" id="tab-5">

                        <div class="schedule-timeline">


                            <!-- <h3>Will be updated soon</h3> -->
                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">May</div>

                                        <!-- <div class="speaker-info">

                                         <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

                                            <h5 class="name">Ashli Scroggy</h5>

                                            <span class="designation">Founder & CEO</span>

                                            </div> -->

                                        <h4><a href="">LiGHT Gwalior Thatipur was established in May 2021. We are common people, we don't want to change the world, we want to improve it first.</a></h4>

                                        <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

                                            <div class="btn-box">

                                                <a href="event-detail.html" class="theme-btn">Read More</a>

                                            </div> -->

                                    </div>

                                </div>

                            </div>


                            <div class="schedule-block even">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">Jun</div>

                                        <!-- <div class="speaker-info">

                                            <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

                                            <h5 class="name">Ashli Scroggy</h5>

                                            <span class="designation">Founder & CEO</span>

                                            </div> -->

                                        <h4><a href="">LiGHT Bhubaneswar was established in June 2021 in online mode. The team is motivated to solve real world problems using innovative solutions.</a></h4>

                                        <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

                                            <div class="btn-box">

                                                <a href="event-detail.html" class="theme-btn">Read More</a>

                                            </div> -->

                                    </div>

                                </div>

                            </div>


                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">Jun</div>

                                        <!-- <div class="speaker-info">

                                        <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

                                            <h5 class="name">Ashli Scroggy</h5>

                                            <span class="designation">Founder & CEO</span>

                                            </div> -->

                                        <h4><a href="">LiGHT Sindri was established in June 2021 in online mode. Our team enthusiastically participated in the INTER CENTER COMPETITION and graciously organized its first event in the month of November.</a></h4>

                                        <!-- <  div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

                                                <div class="btn-box">

                                                    <a href="event-detail.html" class="theme-btn">Read More</a>

                                                </div> -->

                                    </div>

                                </div>

                            </div>


                            <div class="schedule-block even">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">Jun</div>

                                        <!-- <div class="speaker-info">

            <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>

            <h5 class="name">Ashli Scroggy</h5>

            <span class="designation">Founder & CEO</span>

            </div> -->

                                        <h4><a href="">LiGHT Akola was established in June 2021 in a tough pandemic time period in India with a motivation to serve the community. For the last 6 months LiGHT Akola has proved its capabilities by actively conducting events in online mode.</a></h4>

                                        <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>

            <div class="btn-box">

                <a href="event-detail.html" class="theme-btn">Read More</a>

            </div> -->

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </div>

    </section>

    <!--End schedule Section -->

    <!-- <section>
        <div class="container" style="margin-top:30px; margin-bottom:40px">
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
                <link rel="stylesheet" href="css/card.css">

            </head>

            <body style="background-color: #f9fcff;">
                <div class="row">
                    <div class="col-12">
                        <div class="title-heading">
                            Our Clusters
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Western Region</h4>
                                <div class="card-image" style="color: #213661;">
                                <img src="img/west.png" alt="west"></img>
                                </div>
                                <p class="card-text"><a href="">1. LiGHT Jaipur</a> <br>
                                    <a href="">2. LiGHT Gwalior Sithouli</a><br>
                                    <a href="">3. LiGHT Gwalior Thatipur</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Eastern Region</h4>
                                <div class="card-image" style="color: #5e371b;">
                                <img src="img/east.png" alt="east"></img>
                                </div>
                                <p class="card-text"><a href="">1. LiGHT Raipur</a> <br>
                                    <a href="">2. LiGHT Sindri</a><br>
                                    <a href="">3. LiGHT Gaya</a> <br>
                                    <a href="">4. LiGHT Bhubaneshwar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Southern Region</h4>
                                <div class="card-image" style="color:#bc3330;">
                                <img src="img/south.png" alt="south"></img>
                                </div>
                                <p class="card-text"><a href=""> LiGHT Wardha</a><br>
                                    <a href="">2. LiGHT Samvedna</a><br>
                                    <a href="">3. LiGHT Akola</a><br>
                                    <a href="">4. LiGHT Palakkad</a><br>
                                    <a href="">5. LiGHT Chennai</a>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>


            </body>
        </div>

    </section> -->



    <section class="team-section bg-grey bd-bottom padding">

        <div class="container-fluid">
            <h3 class="text-center mb-40">All Branches</h3>
            <form action="" method="post" class="form-horizontal">
                <div class="form-group colum-row row">
                    <!-- <div class="col-sm-2">
                        <select style="height: 48px;" class="form-control">
                            <option>Select Filter</option>
                            <option>Categorywish</option>
                            <option>Yearwish</option>
                            <option>Statewise</option>

                        </select>
                    </div> -->

                    <!-- <div class="col-sm-2">
                            <input type="text" name="newserch" id="live_serch" class="form-control">
                                    </div> -->

                    <div class="col-sm-2">
                        <div class="form-group">
                            <select class="browser-default custom-select" name="No_of_Members" id="branch" onchange="newfilter()">
                                <option selected>Select Branches</option>

                                <?php
                                $sql = "SELECT * FROM `add_branches`";
                                $run = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($run)) {
                                ?>
                                    <option value="<?php echo $row['Collage Name'] ?>"><?php echo $row['Collage Name'] ?></option>

                                <?php
                                }



                                ?>

                            </select>

                        </div>
                    </div>

                    <div class="col-sm-2">
                        <select class="browser-default custom-select" name="No_of_Members" id="year" onchange="yearfilter()">
                            <option selected>Select Year</option>

                            <?php
                            $sql = "SELECT * FROM `add_branches`";
                            $run = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($run)) {
                            ?>
                                <option value="<?php echo $row['Year Of Joining'] ?>"><?php echo $row['Year Of Joining'] ?></option>

                            <?php
                            }



                            ?>

                        </select>
                    </div>




                    <div class="col-sm-2">
                        <button id="submit" name="serch" id="live_serch" class="default-btn" type="submit">Reset</button>
                    </div>

                    <div id="newserchdata">

                    </div>

                </div>
            </form>
            <div class="team-wrapper row" id="brnc">

                <?php

                $sql = "SELECT * FROM `add_branches`";
                $rsult = mysqli_query($conn, $sql);

                while ($data = mysqli_fetch_assoc($rsult)) {
                ?>

                    <div class="col-lg-12 xs-padding">
                        <div class="blog-items grid-list row" style="flex-wrap: nowrap;">


                            <div class="col-md-2 padding-15 text-center">
                                <div class="blog-post">
                                    <a href="branches-data.php?branche=<?php echo $data['Collage Name'] ?>">
                                        <div class="blog-content">

                                            <h3><?php echo $data['Collage Name'] ?></h3>
                                            <h4></i><?php echo $data['State'] ?></h4>



                                        </div>
                                    </a>
                                </div>
                            </div><!-- Post 1 -->




                        <?php
                    }


                        ?>




                        </div>

                    </div><!-- Blog Posts -->
            </div>
        </div>

    </section><!-- /Team Section -->
    <!-- <section class="row bg-grey bd-bottom padding">


    <div class="container">
    <div class="row bg-grey bd-bottom padding">

            <div class="col-sm-12">
                <a href="#" class="default-btn-center">Join Us</a>
            </div>
        </div>
        </div>
        </section> -->
    <?php include 'include/footer.php'; ?>

    <script type="text/javascript">
        function newfilter() {
            var x = document.getElementById("branch").value;

            $.ajax({

                url: "brnch.php",
                method: "POST",
                data: {

                    id: x
                },

                success: function(data) {

                    $("#brnc").html(data);

                }


            });
        }
    </script>

    <script type="text/javascript">
        function yearfilter() {
            var x = document.getElementById("year").value;
            $.ajax({

                url: "yeears.php",
                method: "POST",
                data: {

                    id: x
                },

                success: function(data) {

                    $("#brnc").html(data);

                }


            });
        }
    </script>

    <script src="js/script.js"></script>