<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Lesson 1</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  
<h1><?php 
	$first_name = $_POST['firstname'];
    echo 'Hello' . $first_name;
?></h1>
<p>  <?php
	 $user_age = $_POST['age'];
	 $numberof_years =10;
	 $total_age = $user_age + $numberof_years; 
	 echo 'In 10 years, you will be '. $total_age;
	?>
	</p>


</body>
</html>
