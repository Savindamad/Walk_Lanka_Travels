<?php
if (isset($current) && $current == 'home') {
    ?>
    <div id="footerwrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>About us</h4>
                    <div class="hline-w"></div>
                    <p style="text-align: justify"><?php if (isset($description)) echo $description; ?></p>
                </div>
                <div class="col-md-4">
                    <h4>Contact us</h4>
                    <div class="hline-w"></div>
                    <p>
                        <b>Email :</b> <small><?php if (isset($email)) echo $email; ?></small><br>
                        <b>Phone number :</b> <small><?php if (isset($phone)) echo $phone; ?></small><br><br>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i>
                        </a><a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>                    
                    </p>
                </div>
            </div>
            <div class="row" style="margin-top: 40px">
                <div class="col-md-12">
                    <div id="map" style="width: 100%; height: 300px;"></div>
                    <input type="hidden" id="latitude" value="<?php if (isset($latitude)) echo $latitude; ?>">
                    <input type="hidden" id="longitude" value="<?php if (isset($longitude)) echo $longitude; ?>">
                </div>
            </div>
            <div class="row" style="margin-top: 40px">
                <div class="col-md-12">
                    <p style="text-align: center"><b>&copy; Walk Lanka travels</b></p>
                </div>
            </div>
        </div>
    </div>
    <?php
}
else {
    ?>
    <div id="footerwrap" style="height: 100px; bottom: 0; width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: center"><b>&copy; Walk Lanka travels</b></p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
