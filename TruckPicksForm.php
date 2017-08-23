<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("Includes/head.html"); ?>
</head>

<body>

<!-- =========== NAVBAR =========== -->
<?php include("Includes/navbar.html"); ?>
	  
	 
<!-- =========== Header Text with Background Image =========== -->
	<div class="jumbotron text-center truck-title">
		<h1> NASCAR Truck Series</h1>
		<p></p>
	</div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="page-subheader">
                    <h3>Picks Form</h3>
                </div>
            </div>
        </div>
	
     <div class="container">
        <form action="submits/TruckPicks.php" method="post">
          <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                   <p>First: <input id="entry-field" style="width:100%;" type="text" required name="truck-pick_first"></input></p>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                   <p>Last: <input id="entry-field" style="width:100%;" type="text" required name="truck-pick_last"></input></p>
               </div>
          </div>
          <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                    <p>Email: <input id="entry-field" style="width:100%;" type="text" required name="truck-pick_email"></input></p>
               </div>
          </div>
          <br>
          
             <div class="row">
               <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-10 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-1">
                    <h4>Select one driver from each tier:</h4>
                    <label for="tier-1">Tier 1:</label>
                        <select class="form-control" name="truck_tier1" id="driver-tier">
                           <option>Select One</option>
                           <option>#4 - Christopher Bell</option>
                           <option>#29 - Chase Briscoe</option>
                           <option>#21 - Johnny Sauter</option>
                           <option>#88 - Matt Crafton</option>
                           <option>#?? - Cup Driver</option>
                        </select>
                    <br>
                    <label for="tier-2">Tier 2:</label>
                        <select class="form-control" name="truck_tier2" id="driver-tier">
                           <option>Select One</option>
                           <option>#8 - John Hunter Nemechek</option>
                           <option>#9 - Noah Gragson</option>
                           <option>#16 - Ryan Truex</option>
                           <option>#27 - Ben Rhodes</option>
                           <option>#98 - Grant Enfinger</option>
                        </select>
                    <br>
                    <label for="tier-3">Tier 3:</label>
                        <select class="form-control" name="truck_tier3" id="driver-tier">
                           <option>Select One</option>
                           <option>#13 - Cody Coughlin</option>
                           <option>#19 - Austin Cindric</option>
                           <option>#24 - Justin Haley</option>
                           <option>#33 - Kaz Grala</option>
                           <option>#49 - Wendell Chavous</option>
                        </select>
                    <br>
                    <label for="tier-4">Tier 4:</label>
                        <select class="form-control" name="truck_tier4" id="driver-tier">
                           <option>Select One</option>
                           <option>#52 - Stewart Friesen</option>
                           <option>#45 - T.J. Bell</option>
                           <option>#44 - Austin Wayne Self</option>
                           <option>#92 - Regan Smith</option>
                           <option>#12 - Jordan Anderson</option>
                        </select>
                    <br>
                    <label for="tier-5">Tier 5:</label>
                        <select class="form-control" name="truck_tier5" id="driver-tier">
                           <option>Select One</option>
                           <option>#02 - Austin Hill</option>
                           <option>#6 - Norm Benning</option>
                           <option>#11 - Brett Moffitt</option>
                           <option>#51 - Harrison Burton</option>
                           <option>#75 - Parker Kligerman</option>

                        </select>
               </div>
             </div>
               <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-1">
                         <button style="margin-bottom:20px;margin-top: 10px;" id="truck-picks-submit" type="submit" value="Submit" class="btn btn-default">Submit</button>
                    </div>
               </div>
         </form>
     </div>

<!-- ========== Footer ========== -->
<?php include("Includes/footer.html"); ?>

</body>
</html>