<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(0);

//connection link
require("connection.php");

// buttone for post
if(isset($_POST["delete"]))
{

	//data see from database
	$id = $_POST["myid"];
	
	//delete
	$query = "delete from $teble where id=$id";

	$result = mysqli_query($con,$query);
	
	if($result)
	{
		header("location:index.php");
		exit;
	}
	else
	{
		echo "Not Deleted";
	}
	
}


?>

<form method="post">
<input type="hidden" name="myid" value="<?php echo $_GET["id"]; ?>"/>
<input type="submit" value="YES" name="delete"/>
<a href="index.php">NO</a>
</form>
</body>
</html>