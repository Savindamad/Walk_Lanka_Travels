<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Walk Lanka Travels</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li <?php if (isset($current) && $current == 'home') echo 'class="active"'; ?>><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="dropdown <?php if ((isset($current) && $current == 'packages') || (isset($current) && $current == 'customPackage') || (isset($current) && $current == 'tourGuide')) echo 'active'; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Plan your tour<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('index.php/Packages'); ?>"><b>Tour packages</b></a></li>
                        <li><a href="<?php echo base_url('index.php/CustomPackage'); ?>"><b>Plan your tour</b></a></li>
                        <li><a href="<?php echo base_url('index.php/TourGuide'); ?>"><b>Transport Reservation</b></a></li>
                    </ul>
                </li>
                <li <?php if (isset($current) && $current == 'places') echo 'class="active"'; ?>><a href="<?php echo base_url('index.php/Places'); ?>">Places</a></li>
                <li <?php if (isset($current) && $current == 'reviews') echo 'class="active"'; ?>><a href="<?php echo base_url('index.php/Reviews'); ?>">Reviews</a></li>
            </ul>
        </div>
    </div>
</div>
