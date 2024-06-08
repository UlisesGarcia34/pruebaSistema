<?php 

namespace Controllers;

use MVC\Router;


class DashboardController{

    

   

    public static function index(Router $router){

      $clave = password_hash(123456, PASSWORD_BCRYPT);

        isAuth();

        $id = $_SESSION['id'];
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];
        

        $router->render('dashboard/index', [
            'titulo' => 'Proyectos',
            'nombre' => $nombre,
            'apellido' => $apellido,
            'clave' => $clave
        ]);
    }

    public static function contratos(Router $router)
    {
        isAuth();

        $id = $_SESSION['id'];
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];

        $router->render('contratos/generar-contrato', [
            'titulo' => 'Generar Contrato',
            'nombre' => $nombre,
            'apellido' => $apellido
        ]);
    }

    public static function ver_contrato(Router $router)
    {
        isAuth();

        $id = $_SESSION['id'];
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];

        $router->render('contratos/consulta-contrato', [
            'titulo' => 'Ver Contrato',
            'nombre' => $nombre,
            'apellido' => $apellido
        ]);
    }

  
}

?>