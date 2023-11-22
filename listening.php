<!-- <!DOCTYPE html>
<html>
<body>

<audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="horse.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

</body>
</html> -->

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
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 49%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
    <title>UIU ELC Event</title>

</head>
<body>

</body>
    <main>
        <section>
            <div class="container alignment">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>IELTS Cambridge-10 Listening </h2>

                        <div class="card">
  <img src="illustration-headphones-icon_53876-5571.jpg" alt="Avatar" style="width:100%">
  <div >
  <audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="bk_8_t1_s1.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
  </div>
</div>
                     </div>
                 </div>

        </section> 


        <section>
            <div class="container alignment">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>IELTS Cambridge-9 Listening </h2>

                        <div class="card">
  <img src="illustration-headphones-icon_53876-5571.jpg" alt="Avatar" style="width:100%">
  <div >
  <audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="01.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
  </div>
</div>
                     </div>
                 </div>

        </section> 
        <section>
            <div class="container alignment">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>IELTS Cambridge-8 Listening </h2>

                        <div class="card">
  <img src="illustration-headphones-icon_53876-5571.jpg" alt="Avatar" style="width:100%">
  <div >
  <audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="01.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
  </div>
</div>
                     </div>
                 </div>

        </section> 

    </main>

 