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
    </head>
    <body>
        
        <?php
        $this->load->view('website/navbarn', Array('current' => 'packages'));
        ?>

        <div class="container-fluid" style="margin-top: 100px">
            <div class="row" style="margin-top: 40px; margin-bottom: 40px">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <?php
                        foreach ($packages->result() as $row) {
                            ?>
                            <div class="col-md-4" style="margin-top: 20px">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h3><?php echo $row->name; ?></h3>
                                    </div>
                                    <img alt="Bootstrap Thumbnail Second" src="<?php echo base_url($row->image); ?>" />
                                    <div class="caption">
                                        <p style="text-align: justify">
                                            <?php
                                            if (strlen($row->description) > 250) {
                                                $stringCut = substr($row->description, 0, 248);
                                                $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                                                echo $string . '..';
                                            } else {
                                                echo substr($row->description, 0, 250);
                                            }
                                            ?>
                                        </p><br>
                                        <p><a class="btn btn-primary" href="<?php echo base_url('index.php/Package/') . $row->id; ?>">View details</a></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
        </div>
        <?php
        $this->load->view('website/footern');
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
    </body>
</html>		
