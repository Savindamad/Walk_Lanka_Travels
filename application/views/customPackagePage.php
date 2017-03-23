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
        $this->load->view('website/navbarn', Array('current' => 'customPackage'));
        ?>

        <div class="container-fluid" style="margin-top: 100px; margin-bottom: 20px;" id="content1">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background-color: #f6f6f6; border-radius: 5px;">
                <div class="row" style="margin-top: 30px;">      
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <h3><b>Basic details</b></h3>
                                        <p style="text-align: justify"><b>Fill in the basic contact details and tour details below</b></p><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <form role="form" id="basicBootstrapForm">
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
                                                <select class="form-control bfh-countries" id="country"></select>
                                            </div>
                                            <div class="form-group">
                                                <label for="mobile">
                                                    Phone number
                                                </label>
                                                <input type="text" class="form-control" id="mobile" />
                                            </div>
                                            <div class="form-group">
                                                <label for="hotel_star">
                                                    Hotel rating preference
                                                </label>
                                                <select class="form-control" id="hotel_star" onchange="getHotelsStar(this.value)">
                                                    <option value="TWO">Two star</option>
                                                    <option value="THREE">Three star</option>
                                                    <option value="FOUR">Four star</option>
                                                    <option value="FIVE">Five star</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="numPersons">
                                                    Number of persons
                                                </label>
                                                <input type="number" min="1" max="20" class="form-control" id="numPersons"  value="1" onchange="numPersons_change()"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="numDays">
                                                    Number of days
                                                </label>
                                                <input type="number" min="2" max="30" class="form-control" id="numDays" value="2" onchange="changeNumDays(this.value)"/>
                                                <input type="hidden" value="2" id="numDays1">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-10">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="single">
                                                    Number of single rooms
                                                </label>
                                                <input type="number" class="form-control" id="single" min="0" max="20" value="0" onchange="single_change()"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="double">
                                                    Number of double rooms
                                                </label>
                                                <input type="number" class="form-control" id="double" min="0" max="10" value="0" onchange="double_change()"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="trible">
                                                    Number of triple rooms
                                                </label>
                                                <input type="number" class="form-control" id="trible" min="0" max="10" value="0" onchange="trible_change()"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="trible">
                                                    Arrival date
                                                </label>
                                                <input type="date" class="form-control" id="arrivalDate" min='1899-01-01' max='2000-13-13'/>
                                            </div>
                                            <div class="form-group">
                                                <label for="comment">Message</label>
                                                <textarea class="form-control" id="message" rows="5"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin : 30">
                            <p style="text-align: justify"><b>Use the message box above, to send us a message with your basic preferences about the tour. Tell us the places you like to visit and your accommodations plans. Our agent will contact you through e-mail to assist you plan the tour, the way you wish.</b></p><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: #f6f6f6; margin-top: 40px; margin-bottom: 20px;" id="content2">
            <div style="margin-top: 30px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <h3><b>Places and accommodation details</b></h3>
                                <p style="text-align: justify"><b>Filling this form is optional. You can add places you like to visit with the accommodation preferences, so we can plan your tour, the exact way you dream of. Instead, you can fill the message box above as well, with the tour details.</b></p><br>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;" id="days">
                <?php
                for ($i = 1; $i < 3; $i++) {
                    ?>
                    <div class="col-md-6" style="margin-top: 20px; margin-bottom: 20px" id="d_<?php echo $i; ?>">
                        <div class="row" >
                            <div class="col-md-2"></div>
                            <div class="col-md-10" style="background-color: #ffffff; border-radius: 5px;">
                                <div class="row">
                                    <div style="margin-top: 15px">
                                        <h4>&nbsp&nbsp<b>Day 0<?php echo $i; ?></b></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="p_<?php echo $i; ?>">Select Place</label>
                                                <select class="form-control" id="p_<?php echo $i; ?>" onchange="getPlaceHotels(<?php echo $i; ?>)">
                                                    <?php
                                                    foreach ($places->result() as $row) {
                                                        echo "<option value='$row->id'>$row->name</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="s_<?php echo $i; ?>">Hotel star</label>
                                                <select class="form-control" id="s_<?php echo $i; ?>" onchange="getPlaceHotelsStar(<?php echo $i; ?>)">
                                                    <option value="TWO">Two star</option>
                                                    <option value="THREE">Three star</option>
                                                    <option value="FOUR">Four star</option>
                                                    <option value="FIVE">Five star</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="h_<?php echo $i; ?>">Select hotel</label>
                                                <select class="form-control" id="h_<?php echo $i; ?>">
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="r_<?php echo $i; ?>">Room condition</label>
                                                <select class="form-control" id="r_<?php echo $i; ?>">
                                                    <option value="STANDARD">Standard</option>
                                                    <option value="DELUX">Delux</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div>
                <div class="row" style="margin-top: 40px;">
                    <div class="col-md-12">
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" id="optionalFormStatus">
                                        Check If you fill the option form
                                    </label>
                                </div>
                                <p style="text-align: justify"><b><br>Submit the filled form. Our agent will contact you soon through e-mail, with the tour details.</b></p><br>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 10px; margin-bottom: 40px">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <button class="btn btn-lg btn-primary" onclick="submitFunc()">Submit your response</button>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>


        <?php
        $this->load->view('website/footern');
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script type="text/javascript" src="<?php echo base_url('public/other/js/load_contries.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/other/js/validate.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/other/js/custom_package_page.js') ?>"></script>
    </body>
</html>
