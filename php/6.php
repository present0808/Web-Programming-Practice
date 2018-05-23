<?php 
  $conn = mysqli_connect('localhost','root','present0202');
  mysqli_select_db($conn,'opentutorials');

  $name = mysqli_real_escape_string($conn,$_GET['name']);
  $password = mysqli_real_escape_string($conn,$_GET['password']);
  
  $sql = "SELECT * from user where name='".$name."'AND password = '".$password."'";
  echo $sql;
  $result = mysqli_query($conn,$sql);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
	if($result->num_rows==0)
	{
		echo "패스워드 틀림";
	}
	else
	{
		echo "패스워드 맞음";

	}

	 ?>
</body>
</html>