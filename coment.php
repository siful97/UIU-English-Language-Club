<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>UIU ELC</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/header.css">
<style>

.x{
	text-align: center;


}
</style>
</head> 

<body>
<nav class="navbar navbar-expand-lg navbar-light costom-nav-background-color">
	<a href="http://localhost/uiubook/index.php" class="navbar-brand"><img src="img/uiu.png" id="logo" alt="uiu logo"><b>EnglishClub</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="costom-styel-navCollase collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="index.php" class="nav-item nav-link">Home</a>
			<a href="abt.php" class="nav-item nav-link">About</a>			
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Skill_Dev</a>
				<div class="dropdown-menu">					
					<a href="cse.php" class="dropdown-item">IELTS</a>
					<a href="eee.php" class="dropdown-item">PUBLIC SPEAKING</a>
					<a href="bba.php" class="dropdown-item"></a>
					<a href="civil.php" class="dropdown-item"></a>
				</div>
            </div>
			<a href="#" class="nav-item nav-link">Galary</a>
			<a href="#" class="nav-item nav-link">Contact</a>



        </div>
		<form class="navbar-form form-inline search-form">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="button" class="btn btn-default " id="search"><i style="color: #fff;" class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
        <div class="navbar-nav ml-auto">
				<a href="login.php" class="nav-item nav-link"><i class="fa fa-user-o"></i> Log In</a>
				<a href="register.php" class="nav-item nav-link"><i class="fa fa-light fa-user-plus"></i> Sign Up</a>
        </div>	
    </div>
	</div>
</nav>

<div>

</div  >
</body>




<div class ="x">

<?php
// $mysqli = new mysqli("localhost", $username, $password, $database);
include 'config.php';


$query = "SELECT name,comment FROM `contactus` WHERE 1";
echo "<b> <center>Database Output</center> </b> <br> <br>";

if ($result = mysqli_query($conn,$query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["comment"];

        echo '<b>'.$field1name.$field2name.'</b><br />';
        
    }

/*freeresultset*/
$result->free();
}?>
</div>