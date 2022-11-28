<?php 
    include('koneksi.php'); 

    $sql = "SELECT * FROM dtfa_ek";

    $result = mysqli_query($conn, $sql);
?>

<!doctype html>
<html lang="en">
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
                            <a class="nav-link active" style="color: #000000" aria-current="page" href="aboutMe.php">About Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
  
        <div class="container" >
            <div class="row">
            <?php  while ($row = mysqli_fetch_assoc($result)){ ?>
                <!--  -->
                        <div class="col-3">
                            <div class="card shadow-sm">
                                <a href="des_fa_ek.php?id=<?php echo $row["kode"];?>">
                                    <img src="<?php echo $row["gambar"];?>" class="img-fluid card-img-top" preserverAspecRatio="xMidYMid slice"  style="height: 18rem" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-tittle">
                                        <?php echo $row["nama"];?> 
                                    </h5>
                                </div>
                            </div>
                        </div>
                <!--  -->
            <?php } ?>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>