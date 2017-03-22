<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Walk Lanka Travels</title>

        <link href="<?php echo base_url('public/assets/css/bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('public/assets/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('public/assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('public/other/css/full-slider.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('public/other/css/home-hover.css'); ?>" rel="stylesheet">
    </head>

    <body>
        <?php
        $this->load->view('website/navbarn', Array('current' => 'home'));
        ?>

        <header id="myCarousel" class="carousel slide">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <?php
                $x = 0;
                foreach ($images->result() as $row) {
                    ?>
                    <div class="item <?php if ($x == 0) echo 'active'; ?>">
                        <!-- Set the first background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('<?php echo $row->path ?>');"></div>
                    </div>
                    <?php
                    $x++;
                }
                ?>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row" style="margin-top:60px">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Tour Packages</h3>
                            <p style="margin-bottom : 25px">
                                <b>Pick a tour package that suits your preferences. We have carefully added the most attractive places to the list.</b>
                            </p>
                            <div class="row">
                                <?php
                                foreach ($packages->result() as $row) {
                                    ?>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="thumbnail">
                                            <img alt="Bootstrap Thumbnail Second" src="<?php echo base_url($row->image); ?>" />
                                            <div class="caption">
                                                <h3><?php echo $row->name; ?></h3>
                                                <p style="text-align: justify">
                                                    <?php
                                                    if (strlen($row->description) > 250) {
                                                        $stringCut = substr($row->description, 0, 248);
                                                        $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                                                        echo $string . '..';
                                                    } else {
                                                        echo substr($row->description, 0, 300);
                                                    }
                                                    ?>
                                                </p>
                                                <p><a class="btn btn-primary" href="<?php echo base_url('index.php/Package/') . $row->id; ?>">View more details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="row" style="margin-bottom: 30px; margin-left: 10px">
                                <h4><a href="<?php echo base_url('index.php/Packages'); ?>">View more packages <span class="glyphicon glyphicon-circle-arrow-right"></span></a></h4>
                            </div>
                            <div class="row" style="margin-bottom: 40px;">
                                <div class="col-md-6 col-sm-6">
                                    <div class="thumbnail">
                                        <h3 style="text-align: center">Plan Your Tour</h3>
                                        <a href="<?php echo base_url('index.php/CustomPackage'); ?>">
                                            <img alt="Bootstrap Thumbnail First" src="<?php echo base_url('public/images/other/planTour.png'); ?>" />
                                        </a>
                                        <div class="caption" style="background-color:#0A9EDE;">
                                            <h5><b>Looking for a tailor made tour?</b><br> Go ahead and plan the tour yourself.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="thumbnail">
                                        <h3 style="text-align: center">Transport Reservation</h3>
                                        <a href="<?php echo base_url('index.php/TourGuide'); ?>">
                                            <img alt="Bootstrap Thumbnail First" src="<?php echo base_url('public/images/other/tourGuide.png'); ?>" />
                                        </a>
                                        <div class="caption" style="background-color:#0A9EDE;">
                                            <h5><b>Are you just looking for transportation and tour guidance?</b><br> Let us arrange you a guided tour with comfortable transportation.</h4>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Places To Visit</h3>
                            <p style="margin-bottom : 25px">
                                <b>Sri Lanka is an island blessed with beautiful destinations. Don't miss out any.</b>
                            </p>
                            <div class="row">
                                <?php
                                foreach ($places->result() as $row) {
                                    ?>
                                    <div class="col-md-3 col-sm-6 col-xs-6" style="margin-top:15px">
                                        <div class="cuadro_intro_hover " style="background-color:#0A9EDE;">
                                            <p style="text-align:center; margin-top:20px;">
                                                <img src="<?php echo base_url($row->image) ?>" class="img-responsive" alt="">
                                            </p>
                                            <div class="caption">
                                                <div class="blur"></div>
                                                <div class="caption-text">
                                                    <a href="<?php echo base_url('index.php/Place/') . $row->id; ?>">
                                                        <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;"><?php echo $row->name; ?></h3>
                                                    </a>
                                                    <p style="color: white; text-align: justify; margin-left: 5px; margin-right: 5px;"><small>
                                                            <?php
                                                            if (strlen($row->description) > 220) {
                                                                $stringCut = substr($row->description, 0, 218);
                                                                $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                                                                echo $string . '..';
                                                            } else {
                                                                echo substr($row->description, 0, 220);
                                                            }
                                                            ?>
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; margin-bottom: 30px; margin-left: 10px">
                        <h4><a href="<?php echo base_url('index.php/Packages'); ?>">View more places <span class="glyphicon glyphicon-circle-arrow-right"></span></a></h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Activities</h3>
                            <p style="margin-bottom : 25px">
                                <b>Want to get the best out of your holidays? Checkout the things you can do in Sri Lanka.</b>
                            </p>
                            <div class="row" style="margin-top: 10px;">
                                <?php
                                foreach ($activities->result() as $row) {
                                    ?>
                                    <div class="col-md-3 col-sm-6 col-xs-6" style="margin-top: 15px">
                                        <div class="cuadro_intro_hover " style="background-color:#0A9EDE;">
                                            <p style="text-align:center; margin-top:20px;">
                                                <img src="<?php echo base_url($row->image); ?>" class="img-responsive" alt="">
                                            </p>
                                            <div class="caption">
                                                <div class="blur"></div>
                                                <div class="caption-text">
                                                    <a href="http://trovacamporella.com">
                                                        <h4 style="border-top:2px solid white; border-bottom:2px solid white; padding:20px;"><?php echo $row->name; ?></h4>
                                                    </a>
                                                    <p style="color: white; text-align: justify; margin-left: 5px; margin-right: 5px;">
                                                        <?php
                                                        if (strlen($row->description) > 150) {
                                                            $stringCut = substr($row->description, 0, 148);
                                                            $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                                                            echo $string . '..';
                                                        } else {
                                                            echo substr($row->description, 0, 150);
                                                        }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; margin-bottom: 60px; margin-left: 10px">
                        <h4><a href="<?php echo base_url('index.php/Packages'); ?>">View more activities <span class="glyphicon glyphicon-circle-arrow-right"></span></a></h4>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <?php
        $this->load->view('website/footern', $companyInfo);
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBiLOyslTC14QS8xl906N-6AvpzOn7BEgg" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url('public/other/js/map_home_page.js'); ?>"></script>
        <script>
            $('.carousel').carousel({
                interval: 3000 //changes the speed
            })
        </script>

    </body>
</html>

