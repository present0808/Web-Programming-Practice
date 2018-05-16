<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>JavaScript</h1>
	<script type="text/javascript">
		function a(b)
		{
			document.write("Hello Function" + b);
		}
		function c(input)
		{
			return input*input;
		}
		a("123");		
		document.write(c(23));
	</script>
	<h2>PHP</h2>
	<?php  
	function a(){
		echo "Hello PHP Function";
	}
	function c($input){
		return $input*$input;
	}
	a();
	echo c(1);
	?>
</body>
</html>