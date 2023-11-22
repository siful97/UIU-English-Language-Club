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

</head>

    <main>
        <section>
            <div class="container alignment">
        <p>       
            This is a fantastic opportunity for all students of UIU to hear from a Market Leading Multinational Company and obtain valuable information about Competencies that will make candidates stand out.
All participants who Register for the Seminar will be awarded an “e-Certificate” by Grameenphone <br>
There will be Five Attractive Gifts for Winners of the Live Quiz Competition  <br>
Refreshments will be provided to all participants who Register for the Seminar. <br>
So, Sign-Up Now!
Online Registration Link:<a href="https://docs.google.com/.../1FAIpQLSd-VZCF3.../viewform">https://docs.google.com/.../1FAIpQLSd-VZCF3.../viewform</a>
  <br>
For any further queries, please feel free to get in touch with us: <br>
01. Md. Fuad Hasan <br>
Head – Department of Event Management <br>
UIU English Language Forum <br>
Email: mhasan201160@bba.uiu.ac.bd <br>
Contact: 01821560027 <br>
02. Zobaer Hossain Sayed <br>
Head – Department of Media & Promotion <br>
UIU English Language Forum <br>
Email: zobaersayed1999@gmail.com <br>
Contact: 01631154714 <br>
</p> 

            </div>

        </section> 
    </main>

<?php include 'footer.php'; ?>

