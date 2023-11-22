<?php include 'header.php'?>

<?php
    include 'config.php';

    error_reporting(0);

    $results = mysqli_query( $conn, "SELECT Title,AuthorName,Price FROM buybooks");

    $titles=array();
    $authors=array();
    $prices=array();
    while ($title = mysqli_fetch_array($results)) {
        extract($title);
        array_push($titles,$Title);
        array_push($authors,$AuthorName);
        array_push($prices,$Price);
    }

?>

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
    <style>
/* .flex-container {
  display: flex;
  background-color: orange;
}

.flex-container > div {
  background-color: #f1f1f1;
  margin: 5px;
  padding:100px;
  font-size: 15px;

} */
.t1{

    text-align: center;
}
.t2{

text-align: center;
}
.t3{

text-align: center;
}
.parentDiv // Results in around 400x400 pixels for me
{
    padding-top: 75%; /* 4:3 Aspect Ratio (divide 3 by 4 = 0.75) */

} 
</style>
</head><br>
<h1>PUBLIC SPEAKING</h1><br>
<br>

    <main>




<section>
    

<div class="flex-container">
  <div><section>
<div class="t3">


<div class="parentDiv">
<video width="800" height="400" controls autoplay>
  <source src="xv.mp4" type="video/mp4">
  
  Your browser does not support the video tag.
</video><br>
<h2>Be a More Confident Public Speaker</h2>
</div>
</div>
        </section></div><br>
  <div><section>
  <div class="t3">



<video width="800" height="400"  controls autoplay>
  <source src="4 essential body language tips from a world champion public speaker.mp4" type="video/mp4">
  
  Your browser does not support the video tag.
</video><br>
<h2>4 essential body language tips from a world champion public speaker</h2>

</div>
        </section></div><br>
        <div class="t3">


<video width="800" height="400" controls autoplay>
  <source src="Public Speaking For Beginners.mp4" type="video/mp4">
  
  Your browser does not support the video tag.
</video><br>
<h2>Public speaking for begainers</h2><br><br>

</div>
</div>


        



</section>



    </main>

<?php include 'footer.php'; ?>

