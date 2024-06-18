<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\Cirugias;
use MVC\Router;

class APICirugias
{
  


    public static function guardar_cirugias()
    {
        $cirugias = new Cirugias($_POST);
        $alertas = $cirugias->validarFormulario();

        if (empty($alertas)) {
           

            $cirugias->guardar();   

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


    public static function consultar_cirugias()
    {

        // echo json_encode(['resultado' => 'hola'  );

        // Obtener todos los contratos
        $cirugias = Cirugias::all();

       
        // Imprimir los datos en formato JSON
        echo json_encode($cirugias, JSON_UNESCAPED_SLASHES);
    }
}