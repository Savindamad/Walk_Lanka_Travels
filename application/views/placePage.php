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
        $this->load->view('website/navbarn', Array('current' => 'place'));
        ?>
        
        <div class="container-fluid" style="margin-top: 100px; margin-bottom: 20px;">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background-color: #f6f6f6; border-radius: 5px;">
                <div class="row" style="margin-top: 30px;">      
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content_white" style="text-align: left; margin-top: -50px; margin-bottom: -50px; margin-left: 5px">
                                            <h2><?php echo $place_info->name; ?></h2>
                                        </div>
                                        <div class="thumbnail">
                                            <img alt="Bootstrap Thumbnail Third" src="<?php echo base_url($place_info->image); ?>" />
                                        </div>
                                        <div class="thumbnail" style="margin-top: -10px">
                                            <div class="caption">
                                                <p><?php echo $place_info->description; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="thumbnail">
                                    <div id="map" style="width: 100%; height: 400px;"></div>
                                    <input type="hidden" id="map_place_id" value="<?php echo $place_info->id; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 5px; margin-bottom: 30px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-12">
                                        <div class="content_white" style="text-align: left; margin-top: -50px; margin-bottom: -50px; margin-left: 5px">
                                            <h2>Activities</h2>
                                        </div>
                                        <?php
                                        foreach ($activities->result() as $row) {
                                            ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4" style="border: 1px">
                                                            <div class="thumbnail">
                                                                <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image); ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="thumbnail">
                                                                <div class="caption">
                                                                    <h4><?php echo $row->name; ?></h4>
                                                                    <p><small><?php echo $row->description; ?></small></p>
                                                                </div>
                                                            </div>
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
                            <div class="col-md-6">
                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-12">
                                        <div class="content_white" style="text-align: left; margin-top: -50px; margin-bottom: -50px; margin-left: 5px">
                                            <h2>Hotels</h2>
                                        </div>
                                        <form role="form">                                          
                                            <div class="form-group">
                                                <select class="form-control" id="hotel" onchange="getHotels(<?php echo $place_info->id; ?>, this.value)">
                                                    <option value="TWO">Two Star</option>
                                                    <option value="THREE">Three Star</option>
                                                    <option value="FOUR">Four Star</option>
                                                    <option value="FIVE">Five Star</option>
                                                </select>
                                            </div>
                                        </form>
                                        <div id="hotelsInfo">
                                            <?php
                                            foreach ($two_star_hotels->result() as $row) {
                                                ?>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4" style="border: 1px">
                                                                <div class="thumbnail">
                                                                    <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image); ?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="thumbnail">
                                                                    <div class="caption">
                                                                        <h4><?php echo $row->name; ?></h4>
                                                                        <p><small><?php echo $row->description; ?></small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            if (sizeof($two_star_hotels->result()) == 0) {
                                                ?>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4>No hotels found</h4>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        $this->load->view('website/footern');
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBiLOyslTC14QS8xl906N-6AvpzOn7BEgg" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url('public/other/js/map_place.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/other/js/place_page.js'); ?>"></script>
    </body>
</html>		
