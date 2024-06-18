<?php


namespace Model;

class Contrato extends ActiveRecord
{

    protected static $tabla = 'contrato';
    protected static $columnasDB = ['id', 'contrato_no', 'enFecha', 'pdf','nombreSol','domicilioSol','telefonoSol','nombrePac','domicilioPac','telefonoPac'];

    public $id;
    public $contrato_no;
    public $enFecha;
    public $pdf;
    public $nombreSol;
    public $domicilioSol;
    public $telefonoSol;
    public $nombrePac;
    public $domicilioPac;
    public $telefonoPac;
 

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->contrato_no = $args['contrato_no'] ?? '';
        $this->enFecha = $args['enFecha'] ?? '';
        $this->pdf = $args['pdf'] ?? null;
        $this->nombreSol = $args['nombreSol'] ?? null;
        $this->domicilioSol = $args['domicilioSol'] ?? null;
        $this->telefonoSol = $args['telefonoSol'] ?? null;
        $this->nombrePac = $args['nombrePac'] ?? null;
        $this->domicilioPac = $args['domicilioPac'] ?? null;
        $this->telefonoPac = $args['telefonoPac'] ?? null;
    }

    public function validarFormulario()
    {
        if (!$this->enFecha || $this->enFecha == "undefined NaN de undefined del NaN" ) {
            self::$alertas[] = 'La fecha en la que se suscribe el contrato es obligatoria';
        }elseif (!$this->nombreSol) {
            self::$alertas[] = 'El nombre del solicitante del servicio es obligatorio';
        } elseif (!$this->domicilioSol) {
            self::$alertas[] = 'El domicilio del solicitante del servicio es obligatorio';
        } elseif (!$this->telefonoSol) {
            self::$alertas[] = 'El telefono del solicitante del servicio es obligatorio';
        } elseif (!$this->nombrePac) {
            self::$alertas[] = 'El nombre del paciente del servicio es obligatorio';
        } elseif (!$this->domicilioPac) {
            self::$alertas[] = 'El domicilio telefono del paciente del servicio es obligatorio';
        } elseif (!$this->telefonoPac) {
            self::$alertas[] = 'El telefono del paciente del servicio es obligatorio';
        }
        

        return self::$alertas;
    }

   
}
