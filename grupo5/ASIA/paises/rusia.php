<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RUSIA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../../../img/logo1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../css/style.css" rel="stylesheet">
    <link href="../../../css/mystyle.css" rel="stylesheet">
    <link href="../../../css/paisestyle.css" rel="stylesheet">
    <!-- tabla -->
    <link rel="stylesheet" href="../../recursos/tabla/css-table-18/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../recursos/tabla/css-table-18/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../recursos/tabla/css-table-18/css/style.css">
    <!-- carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <link rel="stylesheet" href="../../recursos/carousel/css/carousel.css">

    <!-- scss bandera -->
    <link rel="stylesheet" href="../../recursos/bandera/scss/bandera.css">
    <link rel="stylesheet" href="../../recursos/bandera/scss/bandera.css.map">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid nav-bar p-0">
        <div class="container-lg p-0">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                <a href="../../../index.html" class="navbar-brand">
                    <img src="../../../img/l1.png" class="logo"> <!-- Agrega la clase "logo" aquí -->
                </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0">
                            <a href="../../../index.html" class="nav-item nav-link ">Inicio</a>
                            <a href="../../../continente.html" class="nav-item nav-link">Continente</a>
                            <a href="../../../ong.html" class="nav-item nav-link ">ONG</a>
                            <a href="../../../paises.html" class="nav-item nav-link active">Países</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-paisheader d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">RUSIA</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Inicio</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Paises</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- About Start -->
    <?php
    if (isset($_GET['nombre'])) {
        $nombrePais = $_GET['nombre'];

        $xml = simplexml_load_file("../../xml/afc.xml");
        $pais = $xml->Confederacion->Continente->Pais->xpath("//Pais[@nombre='$nombrePais']")[0];

        $html = "<h1 style='text-align: center; color: white;'>Información de {$nombrePais}</h1>";
        $html .= '<div class="container">';
        $html .= "<div class='container__image' style='background-image: url({$pais->Bandera});'>";
        // $html .= "<img src='{$pais->Bandera}' alt='Bandera de {$nombrePais}'>";
        $html .= "<div class='container__info container__author'>Bandera perteneciente al país de {$nombrePais}</div>";
        $html .= "<div class='container__info container__location'>Moneda: {$pais->Moneda}</div>";
        $html .= '</div>';
        $html .= '</div>';
        $html .= '<br><br>';
        
        $html .= '<div class="trends">';
        $html .= '<div class="bbb_background"></div>';
        $html .= '<div class="bbb_overlay"></div>';
        $html .= '<div class="container">';
        $html .= '<div class="row">';
        $html .= '<div class="col-lg-3">';
        $html .= '<div class="bbb_container">';
        $html .= '<h2 class="bbb_title">Platos Tipicos</h2>';
        $html .= '<div class="bbb_text">';
        $html .= '<p>Platos tipicos de diferentes distritos de la madre Rusia!</p>';
        $html .= '</div>';
        $html .= '<div class="bbb_slider_nav">';
        $html .= '<div class="bbb_prev bbb_nav"><i class="fas fa-angle-left ml-auto"></i></div>';
        $html .= '<div class="bbb_next bbb_nav"><i class="fas fa-angle-right ml-auto"></i></div>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '<div class="col-lg-9">';
        $html .= '<div class="bbb_slider_container">';
        $html .= '<div class="owl-carousel owl-theme bbb_slider">';

        $platosTipicos = explode(",", $pais->Platotipico);
        foreach ($platosTipicos as $imagenPlato) {
            $html .= '<div class="owl-item">';
            $html .= '<div class="bbb_item">';
            $html .= "<div class='bbb_image d-flex flex-column align-items-center justify-content-center'><img src='{$imagenPlato}' alt='Plato Típico'></div>";
            $html .= '<div class="bbb_content">';
            $html .= '<div class="bbb_category"><a href="#">Plato Típico</a></div>';
            $html .= '<div class="bbb_info clearfix">';
            $html .= '<div class="bbb_name"><a href="#">Este es un plato tipico</a></div>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }

        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';

        $html .= '<div class="table-responsive custom-table-responsive">';
        $html .= '<table class="table custom-table" style="text-align:center;">';
        $html .= '<thead>';
        $html .= '<tr>';
        $html .= '<th scope="col">Order</th>';
        $html .= '<th scope="col">Provincia</th>';
        $html .= '<th scope="col">Ciudad</th>';
        $html .= '<th scope="col">Código Postal</th>';
        $html .= '</tr>';
        $html .= '</thead>';
        $html .= '<tbody>';

        $counter = 1;

        foreach ($pais->Provincia as $provincia) {
            foreach ($provincia->Ciudad as $ciudad) {
                $nombreCiudad = $ciudad['nombre'];
                $codigoPostal = $ciudad['codigoPostal'];
                $html .= '<tr>';
                $html .= "<td>{$counter}</td>";
                $html .= "<td>{$provincia['nombre']}</td>";
                $html .= "<td>{$nombreCiudad}</td>";
                $html .= "<td>{$codigoPostal}</td>";
                $html .= '</tr>';
                $counter++;
            }
        }

        $html .= '</tbody>';
        $html .= '</table>';
        $html .= '</div>';

        echo $html;

    } else {
        echo "<h1>Error: País no especificado.</h1>";
    }
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
    <script src="../../../lib/easing/easing.min.js"></script>
    <script src="../../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../../lib/counterup/counterup.min.js"></script>
    <script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="../../recursos/tabla/css-table-18/js/popper.min.js"></script>
    <script src="../../recursos/tabla/css-table-18/js/main.js"></script>

    <!-- Contact Javascript File -->
    <script src="../../../mail/jqBootstrapValidation.min.js"></script>
    <script src="../../../mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../../../js/main.js"></script>
    <!-- scriptcarousel -->
    <script src="../../recursos/carousel/js/script.js"></script>
</body>

</html>