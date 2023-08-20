<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ASIA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../../img/logo1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/mystyle.css" rel="stylesheet">
    <link href="../../css/paisestyle.css" rel="stylesheet">

    <link rel="stylesheet" href="../recursos/tabla/css-table-18/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../recursos/tabla/css-table-18/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../recursos/tabla/css-table-18/css/style.css">

</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid nav-bar p-0">
        <div class="container-lg p-0">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                <a href="../../index.html" class="navbar-brand">
                    <img src="../../img/l1.png" class="logo"> <!-- Agrega la clase "logo" aquí -->
                </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0">
                            <a href="../../index.html" class="nav-item nav-link ">Inicio</a>
                            <a href="../../continente.html" class="nav-item nav-link">Continente</a>
                            <a href="../../ong.html" class="nav-item nav-link ">ONG</a>
                            <a href="../../paises.html" class="nav-item nav-link active">Países</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-paisheader d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">PAISES</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Inicio</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Paises</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- About Start -->

    <?php

    require_once("../clases/AFC.php"); // Asegúrate de ajustar la ruta según tu estructura de archivos
    require_once("../clases/Continentes.php");
    require_once("../clases/ONG.php");
    $xml = simplexml_load_file("../xml/afc.xml");

    $sede = (string)$xml->Confederacion->Organizacion['sede'];

    $codigoPostalSede = "";
    foreach ($xml->Confederacion->Continente->Pais as $pais) {
        foreach ($pais->Provincia as $provincia) {
            foreach ($provincia->Ciudad as $ciudad) {
                if ((string)$ciudad['nombre'] === $sede) {
                    $codigoPostalSede = (string)$ciudad['codigoPostal'];
                    break 3; // Rompemos ambos bucles al encontrar la sede
                }
            }
        }
    }


    // Crear una instancia de AFC con los datos necesarios
    $afc = new AFC("Asia", 50, "../img/afc.jpg", 47, Continentes::ASIA, new Ciudad($sede, $codigoPostalSede), ONG::BRICS);

    $afc->imprimir();
    
    // Leer y procesar el archivo XML

    $html = <<<html
    <div class="table-responsive custom-table-responsive">
    <table class="table custom-table" style="text-align:center;">
        <thead>
        <tr>
            <th scope="col">Order</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Contact</th>
            <th scope="col">Education</th>
        </tr>
        </thead>
        <tbody>
    html;

    $counter = 1; // Inicializar el contador

    foreach ($xml->Confederacion->Continente->Pais as $pais) {
        $html .= <<<html
        <tr>
            <td>{$counter}</td>
            <td><a href='paises/{$pais['nombre']}.php?nombre={$pais['nombre']}'>{$pais['nombre']}</a></td>
            <td>Far far away, behind the word mountains</td>
            <td>+63 983 0962 971</td>
            <td>NY University</td>
        </tr>
        <tr class="spacer"><td colspan="100"></td></tr>
    html;
        $counter++; // Incrementar el contador
    }

    $html .= <<<html
        </tbody>
    </table>
    </div>
    html;

    echo $html;

    ?>

    <!-- Agregar el script de Bootstrap 3 al final del body -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </div>
    <!-- About End -->


    
	<!-- Team Start -->
    <div class="container-fluid pt-5">
            </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
            <a class="font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../lib/counterup/counterup.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="../recursos/tabla/css-table-18/js/popper.min.js"></script>
    <script src="../recursos/tabla/css-table-18/js/main.js"></script>

    <!-- Contact Javascript File -->
    <script src="../../mail/jqBootstrapValidation.min.js"></script>
    <script src="../../mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>
</body>

</html>
