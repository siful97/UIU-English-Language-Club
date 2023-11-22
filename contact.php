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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Custom CSS -->

    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <title>UIU ELC Event</title>
</head>
<body>
 

 
    <br><br>
    <div style="width: 60%" class="container w3-panel w3-card-4 w3-green ">
            <h2>Contact Us</h2>
            <hr>
            <form action="contact.php" method="post">
                <div class="form-group">
                    <!--<label for="name"> Name : </label>-->
                    <input required type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <!--<label for="email">Email : </label>-->
                    <input required type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <!--<label for="Mobile">Mobile: </label>-->
                    <input required type="text" maxlenth="14" class="form-control" name="mobile" placeholder="Mobile">
                </div>
                <div class="form-group">
                    <!--<label for="Comment"> Comment : </label>-->
                    <textarea class="form-control" name="comment" placeholder="Write something.." style="height:150px"></textarea>
                </div>
                
                <button Type="submit" name="contactus"class ="btn btn-info">Submit</button>
                <br><br>
            </form>
          

            </div>
        </div>
    </div>
          

    <?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: myprofile.php");
}



        if(isset($_POST['contactus'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $mobile=$_POST['mobile'];
            $comment=$_POST['comment'];

            $id= uniqid();
            $sql="INSERT into contactus values('$id','$name','$email','$mobile','$comment')";
            if(mysqli_query($conn,$sql)){
                // echo "  Request submitted. Will be contact soon";
                echo "<script>alert('Request submitted. Will be contact soon.'); window.location='coment.php'; </script>";

            }else{
                echo "Couldn't sent the message";
            }
        }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>