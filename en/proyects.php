<?php

$pg = "proyectos";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyects</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/styles.css">

</head>

<body id="proyectos">
<?php include_once("header-en.php");?>


    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyects</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>The following are some of the work I have done:
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="../imagenes/abmclientes.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-rojo py-3">
                        <h2>ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Registration, cancellation and modification of a customer record. Made in HTML, CSS, PHP, Bootstrap and Json.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="../imagenes/abmventas.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-rojo py-3">
                        <h2>SALES MANAGEMENT SYSTEM</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Customer, product and sales management system. Made in HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery and MySQL database.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="../imagenes/proyecto-integrador.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-rojo py-3">
                        <h2>INTEGRATION PROJECT</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Full Stack project developed in PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago with admin panel, user manager, permissions module and other functionalities
                            functionalities.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once("../footer.php");?>


    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>


</html>