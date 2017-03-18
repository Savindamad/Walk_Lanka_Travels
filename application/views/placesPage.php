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
        $this->load->view('website/navbarn', Array('current' => 'places'));
        ?>
        <div class="container-fluid" style="background: #384452; margin-top: 70px; padding-bottom: 20px">
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-2">
                    <form role="form">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="search place.." oninput="searchPlace(this.value)">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="margin-top: 20px">
            <div id="placeResult">
                <div class="row" style="margin-top: 40px">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="content_white" style="text-align: left">
                            <h2>Most popular tourist attractions</h2>
                            <p>These are the must see places in Sri Lanka, that you need to add to your itinerary</p>
                        </div>
                        <div class="row">
                            <?php
                            foreach ($main_places->result() as $row) {
                                ?>
                                <div class="col-md-3">
                                    <div class="thumbnail">
                                        <h3><?php echo $row->name; ?></h3>
                                        <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image); ?>" />
                                        <div class="caption">
                                            <p>
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
                                            <p style="margin-top: 5px"><a class="btn btn-primary" href="<?php echo base_url('index.php/Place/') . $row->id; ?>">View more details</a></p>
                                        </div>
                                    </div>
                                </div> 
                                <?php
                            }
                            ?>
                        </div>
                        <div class="content_white" style="text-align: left">
                            <h2>Other tourist attractions</h2>
                            <p>Sri Lanka is an island blessed with beautiful beaches, ancient heritage sites, wild life and nature.</p>
                        </div>
                        <div class="row">
                            <?php
                            foreach ($other_places->result() as $row) {
                                ?>
                                <div class="col-md-3">
                                    <div class="thumbnail">
                                        <h3><?php echo $row->name; ?></h3>
                                        <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image); ?>" />
                                        <div class="caption">
                                            <p>
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
                                            <p style="margin-top: 5px"><a class="btn btn-primary" href="<?php echo base_url('index.php/Place/') . $row->id; ?>">View more details</a></p>
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
        </div>

        <?php
        $this->load->view('website/footern');
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/other/js/places_page.js'); ?>"></script>
    </body>
</html>		
