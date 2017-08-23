<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("Includes/head.html"); ?>
</head>

<body>

<!-- =========== NAVBAR =========== -->
<?php include("Includes/navbar.html"); ?>
	  
	 
<!-- =========== Header Text with Background Image =========== -->
	<div class="jumbotron text-center cup-title">
		<h1> NASCAR Cup Series</h1>
		<p></p>
	</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="page-subheader">
                    <h3>Picks Form</h3>
                    <h4>Bojangles Southern 500 @ Darlington Raceway</h4>
                </div>
            </div>
        </div>
	
     <div class="container">
        <form action="submits/CupPicks.php" method="post">
          <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                   <p>First: <input id="entry-field" style="width:100%;" type="text" required name="cup-pick_first"></input></p>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                   <p>Last: <input id="entry-field" style="width:100%;" type="text" required name="cup-pick_last"></input></p>
               </div>
          </div>
          <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                    <p>Email: <input id="entry-field" style="width:100%;" type="text" required name="cup-pick_email"></input></p>
               </div>
          </div>
          <br>
          
             <div class="row">
               <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-10 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-1">
                    <h4>Select one driver from each tier:</h4>
                    <label for="tier-1">Tier 1:</label>
                        <select class="form-control" name="cup_tier1" id="driver-tier">
                           <option>Select One</option>
                           <option>#2 - Brad Keselowski</option>
                           <option>#18 - Kyle Busch</option>
                           <option>#42 - Kyle Larson</option>
                           <option>#48 - Jimmie Johnson</option>
                           <option>#78 - Martin Truex Jr.</option>
                        </select>
                    <br>
                    <label for="tier-b">Tier 2:</label>
                        <select class="form-control" name="cup_tier2" id="driver-tier">
                           <option>Select One</option>
                           <option>#1 - Jamie McMurray</option>
                           <option>#4 - Kevin Harvick</option>
                           <option>#11 - Denny Hamlin</option>
                           <option>#20 - Matt Kenseth</option>
                           <option>#22 - Joey Logano</option>
                        </select>
                    <br>
                    <label for="tier-c">Tier 3:</label>
                        <select class="form-control" name="cup_tier3" id="driver-tier">
                           <option>Select One</option>
                           <option>#14 - Clint Bowyer</option>
                           <option>#19 - Daniel Suarez</option>
                           <option>#21 - Ryan Blaney</option>
                           <option>#24 - Chase Elliott</option>
                           <option>#77 - Erik Jones</option>
                        </select>
                    <br>
                    <label for="tier-d">Tier 4:</label>
                        <select class="form-control" name="cup_tier4" id="driver-tier">
                           <option>Select One</option>
                           <option>#5 - Kasey Kahne</option>
                           <option>#17 - Ricky Stenhouse Jr.</option>
                           <option>#31 - Ryan Newman</option>
                           <option>#41 - Kurt Busch</option>
                           <option>#88 - Dale Earnhardt Jr.</option>
                        </select>
                    <br>
                    <label for="tier-e">Tier 5:</label>
                        <select class="form-control" name="cup_tier5" id="driver-tier">
                           <option>Select One</option>
                           <option>#3 - Austin Dillon</option>
                           <option>#6 - Trevor Bayne</option>
                           <option>#27 - Paul Menard</option>
                           <option>#43 - Aric Almirola</option>
                           <option>#47 - AJ Allmendinger</option>

                        </select>
                   <br>
                   <label for="tier-f">Tier 6:</label>
                        <select class="form-control" name="cup_tier6" id="driver-tier">
                           <option>Select One</option>
                           <option>#10 - Danica Patrick</option>
                           <option>#13 - Ty Dillon</option>
                           <option>#34 - David Ragan</option>
                           <option>#35 - Cole Whitt</option>
                           <option>#37 - Chris Buescher</option>
                           <option>#38 - Landon Cassill</option>
                           <option>#83 - Matt DeBenedetto</option>
                           <option>#95 - Michael McDowell</option>
                        </select>
               </div>
             </div>
               <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xl-offset-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-1">
                         <button style="margin-bottom:20px;margin-top: 10px;" id="cup-picks-submit" value="Submit" type="submit" class="btn btn-default">Submit</button>
                    </div>
               </div>
         </form>
     </div>

<!-- ========== Footer ========== -->
<?php include("Includes/footer.html"); ?>

</body>
</html>