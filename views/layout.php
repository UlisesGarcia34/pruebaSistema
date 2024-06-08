<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Centro Oftalmologico Mira | <?php echo $titulo; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="modules/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="modules/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components.css">

    <link rel="stylesheet" href="css/styleslogin.css">

    <style>
        @keyframes movimiento {
            0% {
                transform: rotateY(0deg);
                filter: brightness(1);
                opacity: 1;
            }

            25% {
                filter: brightness(1.2);
            }

            50% {
                opacity: 0;
                filter: brightness(1);
            }

            75% {
                opacity: 0;
            }

            100% {
                transform: rotateY(360deg);
                filter: brightness(1);
                opacity: 1;
            }
        }

        .animate-img {
            animation: movimiento 4s infinite linear;
            transform-style: preserve-3d;
            /* Asegura una rotación suave */
            display: inline-block;
            /* Hace que la animación funcione correctamente */
            transition: opacity 0.5s ease-in-out;
            /* Añade una transición de opacidad */
        }
    </style>


    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>



</head>

<body>
    <?php echo $contenido; ?>


    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="modules/jquery.min.js"></script>
    <script src="modules/popper.js"></script>
    <script src="modules/tooltip.js"></script>
    <script src="modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="modules/moment.min.js"></script>
    <script src="js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="modules/izitoast/js/iziToast.min.js"></script>
    <script src="modules/datatables/datatables.min.js"></script>
    <script src="modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="modules/jquery-ui/jquery-ui.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="js/page/modules-toastr.js"></script>

    <!-- Template JS File -->
    <script src="js/scripts.js"></script>
    <script src="js/custom.js"></script>
    <?php echo $script ?? ''; ?>
</body>

</html>