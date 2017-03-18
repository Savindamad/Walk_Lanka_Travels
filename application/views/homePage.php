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
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 1</h2>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 2</h2>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 3</h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </header>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>
                                h3. Lorem ipsum dolor sit amet.
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                            </p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>
                                h3. Lorem ipsum dolor sit amet.
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                            </p>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                        <p style="text-align:center; margin-top:20px;">
                                            <img src="http://trovacamporella.com/img/trovacamporella-fiat500.png" class="img-responsive" alt="">
                                        </p>
                                        <div class="caption">
                                            <div class="blur"></div>
                                            <div class="caption-text">
                                                <a href="http://trovacamporella.com">
                                                    <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Place name</h3>
                                                </a>
                                                <p style="color: white; text-align: justify; margin-left: 5px; margin-right: 5px;">Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor kjjk sjnjkc jjc jjk c jkjs jnkjs kjkj skjnkjs...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>
                                h3. Lorem ipsum dolor sit amet.
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                            </p>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                        <p style="text-align:center; margin-top:20px;">
                                            <img src="http://trovacamporella.com/img/trovacamporella-fiat500.png" class="img-responsive" alt="">
                                        </p>
                                        <div class="caption">
                                            <div class="blur"></div>
                                            <div class="caption-text">
                                                <a href="http://trovacamporella.com">
                                                    <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Activity name</h3>
                                                </a>
                                                <p style="color: white; text-align: justify; margin-left: 5px; margin-right: 5px;">Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor kjjk sjnjkc jjc jjk c jkjs jnkjs kjkj skjnkjs...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

