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
                    <h3>Playoff Standings</h3>
                    <p>Top 16 drivers make the playoffs</p>
                </div>
            </div>
        </div>

<!-- =========== Playoff Table =========== -->	
     <div class="container">
          <div class="row"
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="nascar-table">
		<table id="nascarTable" class="table table-striped">
			<thead>
				<tr>
					<th onclick="sortTable(0)">Position</th>
					<th onclick="sortTable(1)" >Driver</th>
					<th onclick="sortTable(2)">Team</th>
					<th onclick="sortTable(3)">Wins</th>
					<th onclick="sortTable(4)">Season Points</th>
					<th onclick="sortTable(5)">Playoff Points</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Martin Truex Jr. #78</td>
					<td>Furniture Row Racing</td>
					<td>3</td>
					<td>780</td>
					<td>29</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Jimmie Johnson #48</td>
					<td>Hendrick Motorsports</td>
					<td>3</td>
					<td>564</td>
					<td>16</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Kyle Larson #42</td>
					<td>Chip-Gnassi Racing</td>
					<td>2</td>
					<td>732</td>
					<td>13</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Brad Keselowski #2</td>
					<td>Team Penske</td>
					<td>2</td>
					<td>608</td>
					<td>13</td>
				</tr>
				<tr>
					<td>5</td>
					<td>Ricky Stenhouse Jr. #17</td>
					<td>Roush Fenway Racing</td>
					<td>2</td>
					<td>443</td>
					<td>10</td>
				</tr>
				<tr>
					<td>6</td>
					<td>Kevin Harvick #4</td>
					<td>Stewart-Haas Racing</td>
					<td>1</td>
					<td>683</td>
					<td>8</td>
				</tr>
				<tr>
					<td>7</td>
					<td>Denny Hamlin #11</td>
					<td>Joe Gibbs Racing</td>
					<td>1</td>
					<td>612</td>
					<td>6</td>
				</tr>
				<tr>
					<td>8</td>
					<td>Ryan Blaney #21</td>
					<td>Wood Brothers Racing</td>
					<td>1</td>
					<td>516</td>
					<td>8</td>
				</tr>
				<tr>
					<td>9</td>
					<td>Kurt Busch #41</td>
					<td>Stewart-Haas Racing</td>
					<td>1</td>
					<td>463</td>
					<td>5</td>
				</tr>
				<tr>
					<td>10</td>
					<td>Ryan Newman #31</td>
					<td>Richard Childress Racing</td>
					<td>1</td>
					<td>462</td>
					<td>5</td>
				</tr>
				<tr>
					<td>11</td>
					<td>Kasey Khane #5</td>
					<td>Hendrick Motorsports</td>
					<td>1</td>
					<td>383</td>
					<td>5</td>
				</tr>
				<tr>
					<td>12</td>
					<td>Austin Dillon #3</td>
					<td>Richard Childress Racing</td>
					<td>1</td>
					<td>379</td>
					<td>5</td>
				</tr>
				<tr>
					<td>13</td>
					<td>Kyle Busch #18</td>
					<td>Joe Gibbs Racing</td>
					<td>0</td>
					<td>673</td>
					<td>7</td>
				</tr>
				<tr>
					<td>14</td>
					<td>Jamie McMurray #1</td>
					<td>Chip-Gnassi Racing</td>
					<td>0</td>
					<td>599</td>
					<td>0</td>
				</tr>
				<tr>
					<td>15</td>
					<td>Chase Elliott #24</td>
					<td>Hendrick Motorsports</td>
					<td>0</td>
					<td>588</td>
					<td>2</td>
				</tr>
				<tr>
					<td>16</td>
					<td>Matt Kenseth #20</td>
					<td>Joe Gibbs Racing</td>
					<td>0</td>
					<td>566</td>
					<td>2</td>
				</tr>
                                <tr>
					<td id="DNF" style="border-top:2px solid red;">17</td>
					<td id="DNF">Clint Bowyer #14</td>
					<td id="DNF">Stewart-Haas Racing</td>
					<td id="DNF">0</td>
					<td id="DNF">533</td>
					<td id="DNF">0</td>
				</tr>
                                <tr>
					<td>18</td>
					<td>Joey Logano #22</td>
					<td>Team Penske</td>
					<td>1 *</td>
					<td>515</td>
					<td>0</td>
				</tr>
                                <tr>
					<td>19</td>
					<td>Erik Jones #77</td>
					<td>Furniture Row Racing</td>
					<td>0</td>
					<td>440</td>
					<td>0</td>
				</tr>
                                <tr>
					<td>20</td>
					<td>Daniel Suarez #19</td>
					<td>Joe Gibbs Racing</td>
					<td>0</td>
					<td>434</td>
					<td>0</td>
				</tr>
			</tbody>
		</table>
<script type="text/javascript">
$("#nascarTable").rtResponsiveTables({
	containerBreakPoint: 640
	});
</script>
         </div>
       </div>
     </div>
   </div>
	
<!-- ========== Footer ========== -->
<?php include("Includes/footer.html"); ?>

</body>
</html>