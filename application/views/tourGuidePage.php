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
        $this->load->view('website/navbarn', Array('current' => 'tourGuide'));
        ?>

        <div class="container-fluid" style="margin-top: 100px; margin-bottom: 40px;" id="content">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background-color: #f6f6f6; border-radius: 5px;">
                <div class="row" style="margin-top: 30px;">      
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-11">
                                        <div>
                                            <h3>Basic Details</h3>
                                        </div>
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="email">
                                                    Email address
                                                </label>
                                                <input type="email" class="form-control" id="email" onchange="email_change()"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="country">
                                                    Country
                                                </label>
                                                <select class="form-control bfh-countries" id="country">

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="mobile">
                                                    Phone number
                                                </label>
                                                <input type="email" class="form-control" id="mobile" />
                                            </div>
                                            <div class="form-group">
                                                <label for="numPersons">
                                                    Number of persons
                                                </label>
                                                <input type="number" class="form-control" id="numPersons" min="1" max="20" value="1" onchange="numPersons_change()"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="numDays">
                                                    Number of days
                                                </label>
                                                <input type="number" class="form-control" min="2" max="30" value="2" id="numDays" />
                                            </div>
                                            <div class="form-group">
                                                <label for="numPlaces">
                                                    Number of places
                                                </label>
                                                <input type="number" class="form-control" min="1" max="30" value="1" id="numPlaces" onchange="changeNumPlaces(this.value)"/>
                                                <input type="hidden" id="numPlaces1" value="1"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea class="form-control" id="message" rows="4"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <div class="thumbnail">
                                            <div id="map" style="width: 100%; height: 600px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <h3>Places to visit</h3>
                                <p>Description</p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <h4><b>Airport</b></h4>
                                <p>You will be picked up at the airport on your arrival date.</p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <p>Description</p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div id="places">
                                <div class="col-md-6" id="d_1">
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10" style="background: #ffffff; border-radius: 5px">
                                                    <h4 style="margin-top: 15px;"><b>Place 01</b></h4>
                                                    <form role="form">
                                                        <div class="form-group">
                                                            <label for="p_1">
                                                                Select place
                                                            </label>
                                                            <select class="form-control" id="p_1">
                                                                <?php
                                                                foreach ($places->result() as $row) {
                                                                    echo "<option value='$row->id'>$row->name</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <h4><b>Airport</b></h4>
                                <p>You will be dropped at the airport on your departure date.</p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px; margin-bottom: 30px">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <div class="form-check" style="margin-top: 10px;">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="optionalFormStatus">
                                                If you fill option form
                                            </label>
                                            <p><br>Submit the filled form. Our agent will contact you soon through e-mail, with the tour details.</b></p>
                                        </div>
                                        <div style="margin-top: 10px; margin-bottom: 40px">
                                            <div class="row">
                                                <button class="btn btn-lg btn-primary" onclick="submitFunc()">Submit your response</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <?php
        $this->load->view('website/footern');
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script type="text/javascript" src="<?php echo base_url('public/other/js/load_contries.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/other/js/validate.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/other/js/tour_guide_page.js') ?>"></script>
    </body>
</html>