<?php

namespace Controllers;

use Model\Contrato;
use MVC\Router;
use setasign\Fpdi\Fpdi;

class APIContrato{
    public static function index()
    {
        $intentosMaximos = 10; // Número máximo de intentos para generar un contrato único
        $intentos = 0;

        do {
            // $numeroContrato = rand(0, 999); // Generar un número aleatorio
            // $numeroContrato .= "-";
            // $numeroContrato .= uniqid();

            // Generar un número aleatorio con formato corto
            $numeroContrato = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT) . '-' .
                strtoupper(bin2hex(random_bytes(2)));

            // Verificar si el contrato ya existe en la base de datos
            $contrato = Contrato::where('contrato_no', $numeroContrato);

            // Si el contrato no existe, salir del bucle
            if (!$contrato) {
                break;
            }

            // Incrementar el contador de intentos
            $intentos++;
        } while ($intentos < $intentosMaximos);

        if ($intentos === $intentosMaximos) {
            // Si se alcanza el número máximo de intentos sin encontrar un contrato único, devuelve un mensaje de error
            $respuesta = [
                'error' => 'No se pudo generar un número de contrato único después de varios intentos.'
            ];
        } else {
            // Se encontró un contrato único, devuelve el número de contrato generado
             $respuesta = [
                 'numeroContrato' => $numeroContrato
             ];
        }

        // Devolver la respuesta en formato JSON
        echo json_encode($respuesta);
    }

    // public static function guardar_contrato(){

    //     $contrato = new Contrato($_POST);

    //     $alertas = $contrato->validarFormulario();

    //     if (empty($alertas)) {
    //         // Ruta del archivo PDF de plantilla
    //         $templatePath = 'pdf/Contrato.pdf';
    //         // Crear una instancia de FPDI
    //         $pdf = new Fpdi();

    //         // Cargar la plantilla PDF
    //         $pageCount = $pdf->setSourceFile($templatePath);

    //         // Iterar a través de todas las páginas del PDF
    //         for ($i = 1; $i <= $pageCount; $i++) {
    //             // Añadir una nueva página
    //             $pdf->AddPage();

    //             // Importar la página actual
    //             $tplIdx = $pdf->importPage($i);

    //             // Usar la plantilla importada
    //             $pdf->useTemplate($tplIdx, 0, 0, 210, 297);

    //             // Establecer la fuente
    //             $pdf->SetFont('Arial', '', 10);

    //             // Coordenadas específicas para la primera página (como ejemplo)
    //             if ($i == 1) {


    //                 // Escribir texto en el PDF en las coordenadas adecuadas
    //                 $pdf->SetXY(170, 37.5);
    //                 $pdf->Write(0, $_POST['contrato_no']);

    //                 $pdf->SetFont('Arial', '', 11.5);
    //                 $pdf->SetXY(99, 71);
    //                 $pdf->Write(0, $_POST['representado']);
    //             }

    //             // Aquí puedes añadir más condiciones para otras páginas si es necesario
    //         }

    //         // Guardar el archivo PDF generado asociado al ID del contrato
    //         $outputPath = 'pdf/' . $_POST['contrato_no'] . '.pdf';
    //         $pdf->Output($outputPath, 'F');

    //         $contrato->sincronizar($_POST);
    //         $contrato->pdf = $outputPath;
    //         $contrato->guardar();

    //         $respuesta = [
    //             'status' => 'success',
    //             'mensaje' => 'Contrato guardado exitosamente'
    //         ];

    //     }else{
    //         $respuesta = [
    //             'status' => 'error',
    //             'alertas' => $alertas
    //         ];
    //     }

    //     echo json_encode($respuesta);



    // }


    public static function guardar_contrato()
    {
        $contrato = new Contrato($_POST);
        $alertas = $contrato->validarFormulario();

        if (empty($alertas)) {
            // Ruta del archivo PDF de plantilla
            $templatePath = 'pdf/Contrato.pdf';
            // Crear una instancia de FPDI
            $pdf = new Fpdi();

            // Cargar la plantilla PDF
            $pageCount = $pdf->setSourceFile($templatePath);

            // Iterar a través de todas las páginas del PDF
            for ($i = 1; $i <= $pageCount; $i++) {
                // Añadir una nueva página
                $pdf->AddPage();

                // Importar la página actual
                $tplIdx = $pdf->importPage($i);

                // Usar la plantilla importada
                $pdf->useTemplate($tplIdx, 0, 0, 210, 297);

                // Establecer la fuente
                $pdf->SetFont('Arial', '', 10);

                // Coordenadas específicas para la primera página (como ejemplo)
                if ($i == 1) {
                    // Escribir texto en el PDF en las coordenadas adecuadas
                    $pdf->SetXY(170, 37.5);
                    $pdf->Write(0, $_POST['contrato_no']);

                    $pdf->SetFont('Arial', '', 11.5);
                    $pdf->SetXY(99, 71);
                    $pdf->Write(0, $_POST['representado']);
                }

                // Aquí puedes añadir más condiciones para otras páginas si es necesario

                if ($i == 2) {
                    // Escribir texto en el PDF en las coordenadas adecuadas
                    $pdf->SetFont('Arial', '', 11.5);
                    $pdf->SetXY(160.18, 84.05);
                    $pdf->Write(0, $_POST['escritura_no']);

                   
                }
            }

            // Crear una carpeta para almacenar el PDF utilizando el número de folio
            $folderPath = 'pdf/' . $_POST['contrato_no'];
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }

            // Guardar el archivo PDF generado en la carpeta creada
            $outputPath = $folderPath . '/' . $_POST['contrato_no'] . '.pdf';
            $pdf->Output($outputPath, 'F');

            $contrato->sincronizar($_POST);
            $contrato->pdf = $outputPath;
            $contrato->guardar();

            $respuesta = [
                'status' => 'success',
                'mensaje' => 'Contrato guardado exitosamente'
            ];
        } else {
            $respuesta = [
                'status' => 'error',
                'alertas' => $alertas
            ];
        }

        echo json_encode($respuesta);
    }


    public static function ver_contrato()
    {

        // echo json_encode(['resultado' => 'hola']);

        // Obtener todos los contratos
        $contratos = Contrato::all();

        
        // Imprimir los datos en formato JSON
        echo json_encode($contratos, JSON_UNESCAPED_SLASHES);
        
    }


}