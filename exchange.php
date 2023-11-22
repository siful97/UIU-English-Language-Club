<?php include 'header.php'?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>Buy Books</title>
    <style>
        .exchange {
            padding: 8px 16px;
            border-radius: 5px;
            color: #fff;
            background-color: #ff922b;
            text-decoration: none;
        }
        .exchange:hover{
            color: #fff;
            background-color: #f68b20;
            text-decoration: none;
        }
        .container .force {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center force">
            <div class="col-md-12">
            <div class="card-body">
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <select name="sort" class="form-control">
                                            <option value="">--Select Option</option>
                                            <option value="a-z"  <?php if(isset($_GET['sort']) && $_GET['sort'] == "a-z"){echo "selected";} ?> >A-Z (Ascending Order)</option>
                                            <option value="z-a" <?php if(isset($_GET['sort']) && $_GET['sort'] == "z-a"){echo "selected";} ?> >Z-A (Descending Order)</option>
                                        </select>
                                        <button type="submit" class="input-group-text" id="basic-addon2 btn">Sort</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

        <div class="row gy-4 my-3">
            
            <?php
                include 'config.php';

                error_reporting(0);

                $sort_option = "";
                $flag = 0;

                if(isset($_GET['sort'])){
                    if($_GET['sort'] == "a-z"){
                        $sort_option = "ASC";
                        $flag = 1;
                    }elseif($_GET['sort'] == "z-a"){
                        $sort_option = "DESC";
                        $flag = 1;
                    }
                }

                if($flag == 1){
                    $query ="SELECT Title,AuthorName FROM exchangebooks ORDER BY Title $sort_option";
                    $query_run = mysqli_query($conn, $query);

                    $check_result = mysqli_num_rows($query_run) > 0;

                    if($check_result){
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                                <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                                    <div class="card" id="custom">
                                        <img src="img/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3 class="card-title"><?php  echo $row['Title']; ?></h3>
                                            <p class="card-text">Writer : <?php echo $row['AuthorName']; ?></p>
                                            <a class="exchange" href="#">Exchange</a>                                        
                                        </div>
                                    </div>
                                </div>

                            <?php
                        }
                    }else{
                        echo "No result found";
                    }
                }else{
                    $query ="SELECT Title,AuthorName FROM exchangebooks";
                    $query_run = mysqli_query($conn, $query);

                    $check_result = mysqli_num_rows($query_run) > 0;

                    if($check_result){
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                                <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                                    <div class="card" id="custom">
                                        <img src="img/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3 class="card-title"><?php  echo $row['Title']; ?></h3>
                                            <p class="card-text">Writer : <?php echo $row['AuthorName']; ?></p>
                                            <a class="exchange" href="exchangebook">Exchange</a>                                        
                                        </div>
                                    </div>
                                </div>

                            <?php
                        }
                    }else{
                        echo "No result found";
                    }
                }
            ?>
        </div>
    </div>
</body>

<?php include 'footer.php'; ?>

