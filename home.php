<?php 
    include('koneksi.php'); 

    $sql = "SELECT * FROM dtmaskot";

    $result = mysqli_query($conn, $sql);
?>

<!doctype html>
<html lang='en'>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <title>EndemikSite</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light justify-content-center text-primary">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="home.php">ENDEMIKSITE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: #000000" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: #000000" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Flora
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="flora_ek.php">Endemik Kalimantan</a></li>
                                <li><a class="dropdown-item" href="flora_sm.php">Endemik Sumatera</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: #000000" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Fauna
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="fauna_Ek.php">Endemik Kalimantan</a></li>
                                <li><a class="dropdown-item" href="fauna_sm.php">Endemik Sumatera</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: #000000" aria-current="page" href="aboutMe.php">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid" >
            <div class="row" >
                <div class="col-sm-4 col-lg-5">
                    <h2 class="display-1" style= "font-size: 40px; font-weight: bold; margin-top: 180px; margin-left: 50px; text-align: center;">Selamat Datang di</h2>
                    <h3 style="color: #003911; font-size: 60px; font-family: Origin Tech Demo; font-weight: bold; letter-spacing: 8px; margin-top: 15px; margin-left: 50px; text-align: center;">ENDEMIKSITE</h3>
                    <h3 style="font-size: 15px; margin-top: 15px; margin-left: 50px; text-align: center;">Website Flora dan Fauna Endemik Indonesia</h3>
                </div>
                <div class="col">
                    <img src="forest.png" class="img-fluid card-img-top" width="750px" alt="">
                </div>
            </div>

            <div class="row" style="margin-top: 30px">
                <?php  while ($row = mysqli_fetch_assoc($result)){ ?>
                    <!--  -->
                            <div class="col-3" style="margin-top: 30px">
                                <div class="card shadow-sm">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="<?php echo $row["gambar_flora"];?>" class="d-block w-100" preserverAspecRatio="xMidYMid slice"  style="height: 18rem" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?php echo $row["gambar_fauna"];?>" class="d-block w-100" preserverAspecRatio="xMidYMid slice"  style="height: 18rem" alt="">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                    </div>
                                    
                                    <div class="card-body">
                                        <h5 class="card-tittle" style="text-align: center">
                                            <?php echo $row["nama_daerah"];?> 
                                        </h5>
                                        <p class="card-text" style= "text-align: justify">
                                            <?php echo $row["deskripsi"];?> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                    <!--  -->
                <?php } ?>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>