<?php 
	 require("lib/db.php");
  require("config/conf.php");
  $conn=db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]); 
  $author = mysqli_real_escape_string($conn,$_POST['author']);
  $title = mysqli_real_escape_string($conn,$_POST['title']);
  $description = mysqli_real_escape_string($conn,$_POST['description']);
  $sql = "SELECT * FROM user WHERE name = '".$author."'";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows==1)
  {  	
  	$row = mysqli_fetch_assoc($result);
  	$user_id = $row['id'];  
  }
  else
  {
  	$sql = "INSERT INTO user(name,password) VALUES('".$author."','111111')";
  	mysqli_query($conn,$sql);
  	$user_id=mysqli_insert_id($conn);

  }
	$sql = "INSERT INTO topic(title,description,author,created) VALUES ('".$title."','".$description."','".$user_id."',now())";
	$result = mysqli_query($conn,$sql);
  $article_id=mysqli_insert_id($conn);
	header('Location: http://localhost/index.php?id='.$article_id);
 ?>