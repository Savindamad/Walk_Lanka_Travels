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
        <link href="<?php echo base_url('public/other/css/reviews.css'); ?>" rel='stylesheet' type='text/css' />
    </head>
    <body>

        <?php
        $this->load->view('website/navbarn', Array('current' => 'reviews'));
        ?>

        <div class="g-commentcount" data-href="[https://plus.google.com/u/0/100763159739584346062]"></div>
        <div class="container-fluid" style="margin-top: 100px">            
            <div class="row" style="margin-top: 40px; margin-bottom: 40px">
                <div class="col-md-1"></div>
                <div class="col-md-10" style="background-color: #f6f6f6; border-radius: 5px;">
                    <div class="row" style="margin-top: 40px; margin-bottom: 40px">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="row">
                                <div id="fb-root" style="max-width: 100%"></div>
                                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>

        <?php
        $this->load->view('website/footern');
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>		
