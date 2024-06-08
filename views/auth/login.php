<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../../loginStilos/styleslogin.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Login Mira</title>
</head>


<body>
    <header class="header">
        <img class="imagenmira" src="/img/LogoMiraBlanco.png" alt="">


        <div class="row">
            <div class="col-md-12">
                <div class="modal-box">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn  show-modal" data-bs-toggle="modal" data-bs-target="#myModal" style="background: none; border:none; padding: 0; cursor:pointer;">
                        <img src="/img/ojoMira2.png" width="150" height="150" alt="" class="animate-img">
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content clearfix">
                                <button id="closeModalBtn" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="modal-body">
                                    <div id="loginModalAlert"></div> <!-- Aquí se mostrará la alerta -->
                                    <div class="modal-icon">
                                        <i class="fa-solid fa-user"></i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 17.5">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                        </svg>

                                    </div>
                                    <h3 class="title"><span><img src="img/logoComplete.png" height="90px" alt="" style="padding-bottom: -100px;"></span></h3>

                                    <?php include_once __DIR__ . '/../templates/alertas.php' ?>

                                    <form method="POST" action="/" novalidate>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Correo Electrónico" required="">
                                        </div><br>

                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required="">
                                        </div>
                                        <button type="submit" class="btn">Ingresar</button>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <ul>
                                        <li><a href="">Olvidaste tu Contraseña ?</a></li>
                                        <li><a href="">Sign Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </header>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <?php echo $js ?? '';
   ?>