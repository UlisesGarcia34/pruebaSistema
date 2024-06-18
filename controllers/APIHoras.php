<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\Gabinete;
use Model\Horas;
use MVC\Router;

class APIHoras
{

    public static function horas_ocupadas()
    {
        $fecha_estudios = $_GET['fecha_estudios'];

        // Obtener todas las citas para la fecha especificada
         $resultado = Gabinete::unRegistro('hora', 'fecha_estudios', $fecha_estudios);
        
       
        
        // Extraer las horas ocupadas de las citas
        $horas_ocupadas = [];
        foreach ($resultado as $registro) {
            $horas_ocupadas[] = $registro->hora; // Utiliza la propiedad hora
        }

        echo json_encode(['horas_ocupadas' => $horas_ocupadas], JSON_UNESCAPED_SLASHES);
    }


    //  public static function horas_ocupadas()
    //  {
    //     $fecha_estudios = $_GET['fecha_estudios'];
    //    $respuesta = Gabinete::belongsTo('fecha_estudios', $fecha_estudios);

    //     echo json_encode($respuesta, JSON_UNESCAPED_SLASHES);
    //  }


    public static function horarios()
    {

        // Obtener todas las citas para la fecha especificada
        $resultado = Horas::all();



        // Extraer las horas ocupadas de las citas
        $horas = [];
        foreach ($resultado as $registro) {
            $horas[] = $registro; // Utiliza la propiedad hora
        }

        echo json_encode(['horas' => $horas]);
    }
   
}
