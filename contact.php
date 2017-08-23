<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("Includes/head.html"); ?>
</head>

<body>

<!-- =========== NAVBAR =========== -->
<?php include("Includes/navbar.html"); ?>
	  
	 
<!-- =========== Header Text with Background Image =========== -->
	<div class="jumbotron text-center">
		<!-- <img class="PFR" src="Images/autoclub-banner.jpg" alt="PFR" /> -->
		<h1> Contact Us</h1>
		<p></p>
	</div>

     	<div class="container">
                <!--<div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div id="contact-message-success" class="alert alert-success" role="alert">
                                        <strong>Thank you for your message. We will contact you soon.</strong>
                                </div>
                        </div>
                </div>-->
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3" id="contact-subheader">
				<h4>We'd love to hear from you! &nbsp;Feel free to drop us a note, or even say hello.</h4>
                                <p>Email: pittsfamilyracing@gmail.com</p>
			</div>
                </div>

     <form action="submits/contact-us.php" method="post">
                <div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3" style="margin-bottom:5px;">
				<input type="text" maxlength="100" placeholder="Name" id="entry-field" name="cf_name" required></input>
			</div>
                </div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3" style="margin-bottom:5px;">
				<input type="text" maxlength="100" placeholder="Email" id="entry-field" name="cf_email" required></input>
			</div>
		</div>
                <div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3" style="margin-bottom:5px;">
				<input type="text" maxlength="100" placeholder="Subject" id="entry-field" name="cf_subject" required></input>
			</div>
                </div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
				<textarea type="text" rows="7"  placeholder="Type message here..." id="entry-field" name="cf_message" required></textarea>
			</div>
		</div>
                <br>
                <div class="row">
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                          <button id="contact-submit" type="submit" value="Send" class="btn btn-default" style="margin-bottom:10px;margin-top:5px;"><i class="fa fa-envelope" aria-hidden="true"></i> Send</button>
                     </div>
                </div>
     </form>
	</div>
	
<!-- ========== Footer ========== -->
<?php include("Includes/footer.html"); ?>


</body>
</html>