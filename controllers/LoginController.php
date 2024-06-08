<?php


namespace Controllers;

use MVC\Router;
use Model\Usuario;

class LoginController {
     
    public static function login(Router $router){
        $error_modal = '';
        $alertas = [];
        // $clave = password_hash(123456, PASSWORD_BCRYPT);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $usuario = new Usuario($_POST);
            $alertas = $usuario->validarLogin();

            if(empty($alertas)){
                // Verificar que el usuario exista
                $usuario = Usuario::where('email', $usuario->email);

                if (!$usuario) {
                    Usuario::setAlerta('alert-danger', 'Email o password incorrectos');
                    $error_modal = "<script>var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                    myModal.show();</script>";
                } else {
                    // El usuario existe
                    if (password_verify($_POST['password'], $usuario->password)) {
                        // Iniciar sesion del usuario

                        

                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre;
                        $_SESSION['apellido'] = $usuario->apellido;
                        $_SESSION['email'] = $usuario->email;
                        $_SESSION['login'] = true;

                        // Redireccionar
                        header('Location: /dashboard');
                      
                    } else {
                        Usuario::setAlerta('alert-danger', 'Password incorrecto');
                        $error_modal = "<script>var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                    myModal.show();</script>"; 
                    }
                }
            }
        }

        $alertas = Usuario::getAlertas();

        $router->render('auth/login',[
            'titulo' => 'Iniciar Sesion',
            'alertas' => $alertas,
            'js' => $error_modal 
        ]);
    }

    public static function logout(Router $router){
        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION = [];
        session_destroy();

        header('Location: /');
    }
}