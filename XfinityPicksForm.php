<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("Includes/head.html"); ?>
</head>

<body>

<!-- =========== NAVBAR =========== -->
<?php include("Includes/navbar.html"); ?>

	 
<!-- =========== Header Text with Background Image =========== -->
	<div class="jumbotron text-center xfinity-title">
		<h1> NASCAR Xfinity Series</h1>
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
        <form action="submits/XfinityPicks.php" method="post">
          <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                   <p>First: <input id="entry-field" style="width:100%;" type="text" required name="xfinity-pick_first"></input></p>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                   <p>Last: <input id="entry-field" style="width:100%;" type="text" required name="xfinity-pick_last"></input></p>
               </div>
          </div>
          <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                    <p>Email: <input id="entry-field" style="width:100%;" type="text" required name="xfinity-pick_email"></input></p>
               </div>
          </div>
          <br>
          
             <div class="row">
               <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-10 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-1">
                    <h4>Select one driver from each tier:</h4>
                    <label for="tier-1">Tier 1:</label>
                        <select class="form-control" name="xfinity_tier1" id="driver-tier">
                           <option>Select One</option>
                           <option>#1 - Elliott Sadler</option>
                           <option>#7 - Justin Allgaier</option>
                           <option>#9 - William Byron</option>
                           <option>#?? - Cup Driver</option>
                           <option>#?? - Cup Driver</option>
                        </select>
                    <br>
                    <label for="tier-2">Tier 2:</label>
                        <select class="form-control" name="xfinity_tier2" id="driver-tier">
                           <option>Select One</option>
                           <option>#00 - Cole Custer</option>
                           <option>#16 - Ryan Reed</option>
                           <option>#18 - Matt Tifft</option>
                           <option>#21 - Daniel Hemric</option>
                           <option>#48 - Brennan Poole</option>
                        </select>
                    <br>
                    <label for="tier-3">Tier 3:</label>
                        <select class="form-control" name="xfinity_tier3" id="driver-tier">
                           <option>Select One</option>
                           <option>#4 - Ross Chastain</option>
                           <option>#5 - Michael Annett</option>
                           <option>#11 - Blake Koch</option>
                           <option>#28 - Dakota Armstrong</option>
                           <option>#62 - Brendan Gaughan</option>
                        </select>
                    <br>
                    <label for="tier-4">Tier 4:</label>
                        <select class="form-control" name="xfinity_tier4" id="driver-tier">
                           <option>Select One</option>
                           <option>#33 - Brandon Jones</option>
                           <option>#39 - Ryan Sieg</option>
                           <option>#42 - Tyler Reddick</option>
                           <option>#44 - JJ Yeley</option>
                           <option>#51 - Jeremy Clements</option>
                        </select>
                    <br>
                    <label for="tier-5">Tier 5:</label>
                        <select class="form-control" name="xfinity_tier5" id="driver-tier">
                           <option>Select One</option>
                           <option>#01 - Harrison Rhodes</option>
                           <option>#2 - Ben Kennedy</option>
                           <option>#7 - Ray Black Jr.</option>
                           <option>#23 - Spencer Gallagher</option>
                           <option>#93 - David Starr</option>

                        </select>
               </div>
             </div>
               <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-1">
                         <button style="margin-bottom:20px;margin-top: 10px;" id="xfinity-picks-submit" type="submit" value="Submit" class="btn btn-default">Submit</button>
                    </div>
               </div>
         </form>
     </div>

<!-- ========== Footer ========== -->
<?php include("Includes/footer.html"); ?>

</body>
</html>