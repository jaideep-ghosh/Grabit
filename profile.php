<?php
include("header.php");
// include("blog-nav.php");
?>

<div class="body-section container">

    <div class="row">
        <div class="col-md-3">
        	<div class="row">
        		<div class="col-md-5">
        			<img src="<?=SITE_URL;?>images/users/jaideep.jpeg" class="img-responsive img-circle"/>
        		</div>
        		<div class="col-md-7">
        			<h4>Jaideep Ghosh</h4>
        			<h5 class="text-success"><b>Available: 50 Rs.</b></h5>
        			<h5>Pending: 20 Rs.</h5>
        		</div>
        	</div>
        	<br/>
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"><i class="fa fa-money"></i> My Cashbacks</a></li>
				<li><a href="#"><i class="fa fa-download"></i> Withdraw Money</a></li>
				<li><a href="#"><i class="fa fa-recycle"></i> Refer and Earn</a></li>
				<li><a href="#"><i class="fa fa-info-circle"></i> Help and Support</a></li>
				<li><a href="#"><i class="fa fa-rocket"></i> Share a Coupon</a></li>
				<li><a href="#"><i class="fa fa-wrench"></i> Profile Settings</a></li>
			</ul>
        </div>
        <div class="col-md-9">
            
        </div>
    </div>

</div>


<?php
include("footer.php");
?>