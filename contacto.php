<?php

$pg = "contacto";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">


</head>

<body id="contacto">
<?php include_once("header.php");?>

    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Contacto
                </h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p> Te invito a que te contactes por mensaje privado</p>
                    <img src="./imagenes/descarga.png" alt="whatsapp" class="img-fluid icono-whatsapp" >
                </div>

                <div class="col-12 col-sm-6">
                    <form action="" method="post">
                        <div>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-3 shadow" placeholder="Nombre y Apellido">
                        </div>

                        <div>
                            <input type="email" name="txtEmail" id="txtEmail" class="form-control mb-3 shadow"  placeholder="Email">
                        </div>
                        <div>
                            <input type="tel" name="txttTelefono" id="txtTelefono" class="form-control mb-3 shadow" placeholder="Teléfono">
                        </div>
                        <div>
                            <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10"
                                class="form-control shadow" placeholder="Escriba su mensaje aquí"></textarea>
                        </div>
                        <div>
                            <button type="submit" id="btnEnviar" name="btnEnviar"
                                class="btn mt-4 shadow">Enviar</button>
                        </div>

                    </form>
                </div>

            </div>


        </div>

    </main>
  

    <?php include_once("footer.php");?>

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script></body>

</html>
