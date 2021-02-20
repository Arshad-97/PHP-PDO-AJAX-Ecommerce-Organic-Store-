<?php 
include_once'./db/connection.php';
$object = new Connection ();
$connection = $object->Connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/aaabbd3922.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="./css/carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/wow.js"></script>
    <script src="./js/card.js"></script>
    <title>Ecommerce</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark text-white" style="background: #09793f;">
            <a class="text-white navbar-brand" href="#">
                <i class="fab fa-pagelines animate flash"></i> Organic Store
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-darget="#navbarCollapse" aria-controls="navbarCollapse" data-expended="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto menu">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <a class="text-white nav-link" href="#">
                        <i class="taxt-warning fas fa-shopping-cart" style="color:yellow" id="card_n"></i> Shopping card
                    </a>
                </form>
            </div>
        </nav>
    </header>
    
    <!-- JAVA SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>