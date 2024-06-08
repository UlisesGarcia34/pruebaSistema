<?php 

namespace Controllers;

use MVC\Router;

class PaginasController{
    public static function error(Router $router){
        $router->render('paginas/404', [
            'titulo' => 'Pagina no encontrada'
        ]);
    }
}



?>