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
        <div class="container-fluid" id="info">
            <div class="row" style="margin-top: 80px">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-1 col-sm-1 col-xs-1">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xm-10">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xm-12">
                                    <h3 class="text-muted">
                                        Your details
                                    </h3>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 30px">
                                <div class="col-md-12 col-sm-12 col-xm-12">
                                    <div class="list-group">
                                        <div class="list-group-item">
                                            Email&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;:&#32;&#32;&#32;&#32; <?php echo $packageData->email ?>
                                        </div>
                                        <div class="list-group-item">
                                            Mobile Number&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;:&#32;&#32;&#32;&#32; <?php echo $packageData->mobile ?>
                                        </div>
                                        <div class="list-group-item">
                                            Country&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;:&#32;&#32;&#32;&#32; <?php echo $packageData->email ?>
                                        </div>
                                        <div class="list-group-item">
                                            Number of persons&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;:&#32;&#32;&#32;&#32; <?php echo $packageData->num_persons ?>
                                        </div>
                                        <div class="list-group-item">
                                            Number of single rooms&#32;&#32;:&#32;&#32;&#32;&#32; <?php echo $packageData->num_single ?>
                                        </div>
                                        <div class="list-group-item">
                                            Number of double rooms&#32;:&#32;&#32;&#32;&#32; <?php echo $packageData->num_double ?>
                                        </div>
                                        <div class="list-group-item">
                                            Number of triple rooms&#32;&#32;&#32;:&#32;&#32;&#32;&#32; <?php echo $packageData->num_thrible ?>
                                        </div>
                                        <div class="list-group-item">
                                            Price&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;:&#32;&#32;&#32;&#32; <?php echo $packageData->price ?>
                                        </div>
                                        <div class="list-group-item">
                                            Advance you pay&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;:&#32;&#32;&#32;&#32; <?php echo $packageData->advance ?>
                                        </div>
                                        <div class="list-group-item">
                                            Arrival date&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;:&#32;&#32;&#32;&#32; <?php echo $packageData->arrival_date ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:50px">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <h3 class="text-muted">
                                                Package details
                                            </h3>
                                        </div>
                                        <div class="row" style="margin-top: 30px">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Day</th>
                                                        <th>Number of days</th>
                                                        <th>Place</th>
                                                        <th>Hotel</th>
                                                        <th>Room condition</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr> 
                                                        <td>--------------------------------------</td>
                                                        <td>--------------------------------------</td>
                                                        <td>--------------------------------------</td>
                                                        <td>--------------------------------------</td>
                                                        <td>--------------------------------------</td>
                                                    </tr>
                                                    <?php
                                                    for ($i = 0; $i < sizeof($PackageInfo); $i++) {
                                                        ?>
                                                        <tr class="active"> 
                                                            <td><?php echo $PackageInfo[$i]->day_num; ?></td>
                                                            <td><?php echo $PackageInfo[$i]->num_days; ?></td>
                                                            <td><?php echo $PackageInfo[$i]->place_name; ?></td>
                                                            <td><?php echo $hotelInfo[$i]->name; ?></td>
                                                            <td><?php echo strtolower($hotelInfo[$i]->room_condition); ?></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/other/js/jsjpdf.js'); ?>"></script>
        <script src="<?php echo base_url('public/other/js/html-pdf.js'); ?>"></script>
    </body>
</html>		
