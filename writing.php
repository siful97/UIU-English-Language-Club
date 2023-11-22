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

    <section>
    <h1 >WRITING</h1><br> <br>

<div class="flex-container">
  <div><section>
<div class="t1">

<h2>TASK-1</h2><br><br>
<p>The graph below shows the proportion of four different materials that were recycled from 1982 to 2010 in a particular country

Summarise the information by selecting and reporting the main features, and make comparisons where relevant.

Write at least 150 words. </p> <br><br>
<h1><img src="ac_writing_task_1_0.jpg" alt="Flowers in Chania" width="460" height="345"></h1>
</div>
        </section></div>
  <div><section>
<div class="t2">

<h2>TASK-1</h2><br><br>
<p>The graph below shows the proportion of four different materials that were recycled from 1982 to 2010 in a particular country

Summarise the information by selecting and reporting the main features, and make comparisons where relevant.

Write at least 150 words. </p> <br><br>
<h1><img src="2_edited.jpg" alt="Flowers in Chania" width="460" height="345"></h1>
</div>
        </section></div>
  <!-- <div>3</div>   -->
</div>


<section>


</section>
</section><br><br>



<section>
    

<div class="flex-container">
  <div><section>
<div class="t3">

<h2>TASK-2</h2><br><br>

<h1><img src="xnxx.jpg" alt="Flowers in Chania" width="460" height="345"></h1>
</div>
        </section></div>
  <div><section>
  <div class="t3">

<h2>TASK-2</h2><br><br>

<h1><img src="xnxx.jpg" alt="Flowers in Chania" width="460" height="345"></h1>
</div>
        </section></div>
        <div class="t3">

<h2>TASK-2</h2><br><br>

<h1><img src="xnxx.jpg" alt="Flowers in Chania" width="460" height="345"></h1>
</div>
</div>


        
<section>


</section>
</section>

    </main>

<?php include 'footer.php'; ?>

