<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\Gabinete;
use MVC\Router;

class APIGabinete
{
  


    public static function guardar_gabinete()
    {
        $gabinete = new Gabinete($_POST);
        $alertas = $gabinete->validarFormulario();

        if (empty($alertas)) {
           

            $gabinete->guardar();   

            $respuesta = [
                'status' => 'success',
                'mensaje' => 'Registro guardado exitosamente'
            ];
        } else {
            $respuesta = [
                'status' => 'error',
                'alertas' => $alertas
            ];
        }

        echo json_encode($respuesta);
    }


    public static function consultar_gabinete()
    {

        // echo json_encode(['resultado' => 'hola']);

        // Obtener todos los contratos
        $gabinete = Gabinete::all();


        // Imprimir los datos en formato JSON
        echo json_encode($gabinete, JSON_UNESCAPED_SLASHES);
    }
}