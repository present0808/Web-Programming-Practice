<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>JavaScript</h1>
	<ol>
	<script type="text/javascript">
		list = new Array("one", "two", "three");
		for(i=0; i<list.length; i++)
		{
			document.write("<li>"+list[i]+"<br/></li>");
		}
	</script>
	</ol>
	<h2>PHP</h2>
	<ul>
	<?php 
		$list = array("one", "two", "three");
		for($i=0; $i<count($list); $i++)
		{
			echo "<li>".$list[$i]."</br></li>";

		}
	 ?>
	</ul>
</body>
</html>