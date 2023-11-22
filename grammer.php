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
.flex-container {
  display: flex;
  background-color: orange;
}

.flex-container > div {
  background-color: #f1f1f1;
  margin: 5px;
  padding: 17px;
  font-size: 15px;

}
.t1{

    text-align: center;
}
.t2{

text-align: center;
}
.t3{

text-align: center;
}
</style>
</head>

    <main>

    <br><br>

<h2>GRAMMER</h2> <br>

<section>
    

<div class="flex-container">
  <div><section>
<div class="t3">

<h2></h2><br><br>

<h2><img src="321415223_917629842742473_6372584473791783619_n.jpg" alt="Italian Trulli">
</h2>  
  <p  >Grammer pdf-1 <a href="Grammar Rules _ Speak Good English Movement.pdf">pdf</a>.</p>
</div>
        </section></div>
  <div><section>
  <div class="t3">

<h2></h2><br><br>

<h2><img src="322377285_901934574272225_3840202899811636287_n.jpg" alt="Italian Trulli">
</h2>  
  <p>Grammer pdf-1 <a href="ieltsfever-ac-reading-test-1.pdf">pdf</a>.</p>
</div>
        </section></div>
        <div><section>

        <div class="t3">

<h2></h2><br><br>

<h2><img src="322227464_3393778734200279_678950462761834948_n.jpg" alt="Italian Trulli">
</h2>  
  <p>Grammer pdf-1 <a href="ieltsfever-ac-reading-test-1.pdf">pdf</a>.</p>
</div>
</section></div>
<div><section>

        <div class="t3">

<h2></h2><br><br>

<h2><img src="322227464_3393778734200279_678950462761834948_n.jpg" alt="Italian Trulli">
</h2>  
  <p>Grammer pdf-1 <a href="ieltsfever-ac-reading-test-1.pdf">pdf</a>.</p>
</div>
</section></div>
</div>


        
<section>


</section>
</section>

    </main>

<?php include 'footer.php'; ?>

