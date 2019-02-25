<!DOCTYPE html>
<html>
<head>
	<title>lecture</title>
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
</head>
<body>
<?php

$stack=array();
require('config/db.php');

switch ($semester)
{
	case 'F':
		$table = `flec`;
		break;
	case 'W':
		$table = 'wlec';
		break;
	case 'S':
		$table = 'slec';
		break;
	default:
		$table = 'error';
}

//Create query
$query = "SELECT * FROM `$table` WHERE `CourseName`='$course'";

//Get Result
$result = mysqli_query($conn, $query);

//Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free Result
mysqli_free_result($result);

//Instantiating the Fall semster
foreach($posts as $post)
{
	$courseName = $post['CourseName'];
	$lecInfo = $post ['LecInfo'];
	$subSection = null;
	$lecDay = $post ['LecDay'];
	$startLecTime= $post ['StartLecTime'];
	$endLecTime= $post ['EndLecTime'];
	$campus = "SGW";

	//Making a new session object with the course information
	$ham =  new Session($courseName,$lecInfo,$subSection,$semester,$lecDay,$startLecTime,$endLecTime,$campus);

 	array_push($stack, $ham);
}
mysqli_close($conn);
return $stack;

?>
</body>
</html>
