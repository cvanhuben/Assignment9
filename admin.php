<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
// UNCOMMENT ME
// if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
//   header("location: login.php");
//   exit;
// }
?>

<?php
	// 1. Create a database connection
	    include 'db_info.php';


	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query  = "SELECT * FROM `frameworkSurvey` ORDER BY `frameworkSurvey`.`counter` ASC";

	$result = mysqli_query($connection, $query);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <!--Import bootstrap.css-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <!--Import overrides.css-->
    <link type="text/css" rel="stylesheet" href="css/overrides.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  </head>

  <body class="bg-cover">
		<div class="container card-container">
    	<h1 class="text-center">Frameworks Survey: Database Table</h1>
    	<p>This table represents the results from your user survey on frameworks. You may modify the data by clicking the "EDIT" button. Be sure to click "SAVE" after you are done editing. You also have the option to "DELETE" each row. This will update the MySQL database and you will be able to see your new, manipulated results.</p>

    	<!-- <a href="logout.php">logout</a> -->

			<div class="scrollable">
	    	<table class="table table-striped table-bordered table-hover">
	    		<tr>
	    			<th scope="col">ID</th>
	    			<th scope="col">Name</th>
	    			<th scope="col">Email</th>
	    			<th scope="col">Favorite Framework</th>
	    			<th scope="col">Favorite Features</th>
	    			<th scope="col">Features to Change</th>
	    			<th scope="col">Suggested Features</th>
	    			<th scope="col">Suggested Framework</th>
	    			<th scope="col">Modify</th>
	    		</tr>

<?php
	// 3. Use returned data (if any)
	while($frameworkSurvey = mysqli_fetch_assoc($result)) {
		// output data from each row
?>

	    		<tr scope="row" id="row<?php echo $frameworkSurvey['counter'];?>">
	    			<td id="counter_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['counter'];?></td>
	      			<td id="name_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['name'];?></td>
	      			<td id="email_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['email'];?></td>
	      			<td id="favoriteFramework_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['favoriteFramework'];?></td>
	      			 <td id="featuresToChange_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['featuresToChange'];?></td>
	      			<td id="favoriteFeature_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['favoriteFeature'];?></td>
	      			<td id="suggestionFeature_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['suggestionFeature'];?></td>
	      			<td id="suggestionFramework_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['suggestionFramework'];?></td>

	      			<td>
	       				<button class="edit_button btn btn-primary" id="edit_button<?php echo $frameworkSurvey['counter'];?>" value="edit" onclick="edit_row('<?php echo $frameworkSurvey['counter'];?>');">Edit
	       				</button>
	       				<button  class="save_button btn btn-primary" id="save_button<?php echo $frameworkSurvey['counter'];?>" value="save" style="display:none" onclick="save_row('<?php echo $frameworkSurvey['counter'];?>');">Save
	       				</button>
	       				<!-- confirmation taken from http://www.javascripter.net/faq/confirm.htm -->
	       				<button class="delete_button btn btn-primary" id="delete_button<?php echo $frameworkSurvey['counter'];?>" value="delete" onclick="if(confirm('Are you sure you want to delete?'))delete_row('<?php echo $frameworkSurvey['counter'];?>'),alert('Record Deleted');">Delete
	       				</button>
	      			</td>
	     		</tr>




<?php } ?>

	    	</table>
			</div>

    	<div class="row">
    	   <a href="index.php">Back to Survey</a>

    	</div>

    	<div class="row">
						<a class="btn btn-primary" href="logout.php" role="button">Logout</a>
		</div>

    </div>

    <!-- Downloading jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script type="text/javascript" src="js/modify_database.js"></script>

    <!-- Script for alert popups -->
    <script type="text/javascript">

    	$('form').on('click','.edit_button',function(){

    		$(save_button).show();
    	});





    		);

    	// $('this').parent().find('save_button');

    </script>

  </body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
