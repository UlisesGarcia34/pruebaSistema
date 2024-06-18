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

        // Obtener el último número de contrato generado de la base de datos
        $ultimoContrato = Contrato::orderBy('contrato_no', 'DESC');
        $ultimoNumero = $ultimoContrato ? intval($ultimoContrato->contrato_no) : 0;
        
        do {
            // Incrementar el último número y convertirlo en cadena con ceros a la izquierda
            if ($ultimoNumero < 999) {
                $ultimoNumero++;
                $numeroContrato = str_pad($ultimoNumero, 3, '0', STR_PAD_LEFT);
            } else {
                $ultimoNumero++;
                $numeroContrato = str_pad($ultimoNumero, 4, '0', STR_PAD_LEFT);
            }

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


    // public static function index()
            // {
            //     $intentosMaximos = 10; // Número máximo de intentos para generar un contrato único
            //     $intentos = 0;

            //     do {
                    
            //         // Generar un número aleatorio con formato corto
            //         $numeroContrato = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT) . '-' .
            //             strtoupper(bin2hex(random_bytes(2)));

            //         // Verificar si el contrato ya existe en la base de datos
            //         $contrato = Contrato::where('contrato_no', $numeroContrato);

            //         // Si el contrato no existe, salir del bucle
            //         if (!$contrato) {
            //             break;
            //         }

            //         // Incrementar el contador de intentos
            //         $intentos++;
            //     } while ($intentos < $intentosMaximos);

            //     if ($intentos === $intentosMaximos) {
            //         // Si se alcanza el número máximo de intentos sin encontrar un contrato único, devuelve un mensaje de error
            //         $respuesta = [
            //             'error' => 'No se pudo generar un número de contrato único después de varios intentos.'
            //         ];
            //     } else {
            //         // Se encontró un contrato único, devuelve el número de contrato generado
            //          $respuesta = [
            //              'numeroContrato' => $numeroContrato
            //          ];
            //     }

            //     // Devolver la respuesta en formato JSON
            //     echo json_encode($respuesta);
            // }

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
            $templatePath = 'pdf/ContratoServiciosMira.pdf';
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

               
                }

                // Aquí puedes añadir más condiciones para otras páginas si es necesario

              
                if ($i == 7) {
                    // Escribir texto en el PDF en las coordenadas adecuadas
                    $pdf->SetFont('Arial', '', 10);
                    $pdf->SetXY(131.44, 257);
                    $pdf->Write(0, $_POST['enFecha']);

                   
                }

                if ($i == 9) {
                    // Escribir texto en el PDF en las coordenadas adecuadas
                    $pdf->SetFont('Arial', '', 10);
                    $pdf->SetXY(37.5, 57.5);
                    $pdf->Write(0, $_POST['nombreSol']);
                    // Escribir texto en el PDF en las coordenadas adecuadas
                    $pdf->SetFont('Arial', '', 10);
                    $pdf->SetXY(39, 62);
                    $pdf->Write(0, $_POST['domicilioSol']);
                    // Escribir texto en el PDF en las coordenadas adecuadas
                    $pdf->SetFont('Arial', '', 10);
                    $pdf->SetXY(37.5, 66.5);
                    $pdf->Write(0, $_POST['telefonoSol']);


                    // Escribir texto en el PDF en las coordenadas adecuadas
                    $pdf->SetFont('Arial', '', 10);
                    $pdf->SetXY(37.5, 81.8);
                    $pdf->Write(0, $_POST['nombrePac']);
                    // Escribir texto en el PDF en las coordenadas adecuadas
                    $pdf->SetFont('Arial', '', 10);
                    $pdf->SetXY(39, 86.1);
                    $pdf->Write(0, $_POST['domicilioPac']);
                    // Escribir texto en el PDF en las coordenadas adecuadas
                    $pdf->SetFont('Arial', '', 10);
                    $pdf->SetXY(37.7, 90.6);
                    $pdf->Write(0, $_POST['telefonoPac']);
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

    public static function eliminar_contrato()
    {

        // echo json_encode(['resultado' => 'hola']);

        // Obtener todos los contratos
        $contrato = new Contrato($_POST);
        $contrato = Contrato::find($_POST['id']);
        

        // Obtener la ruta del archivo PDF del contrato
        $pdfPath = $contrato->pdf;

        // Verificar si el archivo PDF existe y eliminarlo
        if (file_exists($pdfPath)) {
            unlink($pdfPath);
        }

        // Obtener la carpeta del contrato
        $folderPath = dirname($pdfPath);

        // Verificar si la carpeta existe y eliminarla
        if (is_dir($folderPath)) {
            rmdir($folderPath);
        }

        $contrato->eliminar();

        $respuesta = [
            'status' => 'success',
            'mensaje' => 'Contrato eliminado exitosamente'
        ];

        
        // Imprimir los datos en formato JSON
        echo json_encode($respuesta);
        
    }


}