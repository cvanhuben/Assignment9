

<?php
	// 1. Create a database connection
	    include 'db_info.php';


	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query  = "SELECT * FROM `frameworkSurvey` ORDER BY `frameworkSurvey`.`counter` ASC";

	$result = mysqli_query($connection, $query);

	
?>

<!doctype html>
<html>
<head>
	<title>Frameworks Survey Table</title>

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
	
	<!--Import overrides.css-->
    <link type="text/css" rel="stylesheet" href="css/overrides.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body class="grey darken-3">
	<div class="container">

	<h1 class="arc center-align">Frameworks Survey: Database Table</h1>
	
	<div class="charl">

	<p>This table represents the results from your user survey on frameworks. You may modify the data by clicking the "EDIT" button. Be sure to click "SAVE" after you are done editing. You also have the option to "DELETE" each row. This will update the MySQL database and you will be able to see your new, manipulated results.</p>

	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Favorite Framework</th>
			<th>Favorite Features</th>
			<th>Features to Change</th>
			<th>Suggested Features</th>
			<th>Suggested Framework</th>
			<th>Modify</th>
		</tr>

<?php
	// 3. Use returned data (if any)
	while($frameworkSurvey = mysqli_fetch_assoc($result)) {
		// output data from each row
?>	

		<tr id="row<?php echo $frameworkSurvey['counter'];?>">
			<td id="counter_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['counter'];?></td>
  			<td id="name_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['name'];?></td>
  			<td id="email_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['email'];?></td>
  			<td id="favoriteFramework_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['favoriteFramework'];?></td>
  			 <td id="featuresToChange_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['featuresToChange'];?></td>
  			<td id="favoriteFeature_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['favoriteFeature'];?></td> 
  			<td id="suggestionFeature_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['suggestionFeature'];?></td>
  			<td id="suggestionFramework_val<?php echo $frameworkSurvey['counter'];?>"><?php echo $frameworkSurvey['suggestionFramework'];?></td>

  			<td>
   				<button class="edit_button orange lighten-1 btn waves-effect waves-light" id="edit_button<?php echo $frameworkSurvey['counter'];?>" value="edit" onclick="edit_row('<?php echo $frameworkSurvey['counter'];?>');">Edit
   				</button>
   				<button  class="save_button orange lighten-1 btn waves-effect waves-light" id="save_button<?php echo $frameworkSurvey['counter'];?>" value="save" onclick="save_row('<?php echo $frameworkSurvey['counter'];?>'); Materialize.toast('Saved', 4000)">Save
   				</button>

   				<button class="delete_button orange lighten-1 btn waves-effect waves-light" id="delete_button<?php echo $frameworkSurvey['counter'];?>" value="delete" onclick="delete_row('<?php echo $frameworkSurvey['counter'];?>'); Materialize.toast('Delete', 4000)">Delete
   				</button>

  			</td>
 		</tr>
		
		


<?php } ?>

	</table>	
	
	<div class="center-align">
	
	<a class="orange lighten-1 btn waves-effect waves-light" href="index.php">Back to Survey</a>
	
	</div>
	
	</div>
	
	</div>


<!-- Downloading jQuery and Materialize -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/modify_database.js"></script>

<!-- Script for alert popups -->
<script type="text/javascript">
	// Materialize.toast(message, displayLength, className, completeCallback);
	Materialize.toast('Saved', 4000) // 4000 is the duration of the toast
	Materialize.toast('Delete', 4000) // 4000 is the duration of the toast
</script>


</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>