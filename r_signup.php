<?php 
session_start();

	include("r_connection.php");
	include("r_functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: r_login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>


	<!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		/* background-color: grey; */
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box" >
		
		<form method="post" >

			<div class= "table  ps-3 pe-9 mx-auto">
            <h1>Create account</h1>

			<label for="user_name" class="col-sm-4 col-form-label">Username</label>
			<input id="text" type="text" name="user_name"><br><br>

			<label for="password" class="col-sm-4 col-form-label">Password</label>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" class="btn btn-primary " value="Signup"><br><br>

			<a href="r_login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>