<?php 
session_start();

	include("l_connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$apartment = $_POST['apartment'];
		$area = $_POST['area'];
        $rent = $_POST['rent'];
        $other = $_POST['other'];
        $gender = $_POST['gender'];


		if(!empty($apartment) && !empty($area) && !empty($rent) && !empty($other) && !empty($gender))
		{

			//save to database
			$id = random_num(20);
			$query = "insert into rooms (id,apartment,area,rent,other,gender) values ('$id','$apartment','$area','$rent','$other','$gender')";

			mysqli_query($con, $query);

			header("Location: r_room.html");
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
	<title>List Rooms</title>


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
            <h1>List Rooms</h1>

			<label for="apartment" class="col-sm-4 col-form-label">Apartment Name</label>
			<input id="text" type="text" name="apartment"><br><br>

            <label for="gender" class="col-sm-4 col-form-label">Gender</label>
			<input id="text" type="text" name="gender"><br><br>

            <label for="area" class="col-sm-4 col-form-label">Area</label>
			<input id="text" type="text" name="area"><br><br>

            <label for="rent" class="col-sm-4 col-form-label">Rent(Rs.)</label>
			<input id="text" type="text" name="rent"><br><br>

            <label for="other" class="col-sm-4 col-form-label">Other Specification</label>
			<input id="text" type="text" name="other"><br><br>

			

			<input id="button" type="submit" class="btn btn-primary " value="Submit"><br><br>

			<!-- <a href="login.php">Click to Login</a><br><br> -->
		</form>
	</div>
</body>
</html>