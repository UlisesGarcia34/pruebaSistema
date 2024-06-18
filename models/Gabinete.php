<?php


namespace Model;

class Gabinete extends ActiveRecord
{

    protected static $tabla = 'gabinete';
    protected static $columnasDB = ['id', 'nombre_paciente', 'fecha_nacimiento', 'edad', 'estudios', 'medico','telefono_paciente', 'hora','fecha_estudios'];

    public $id;
    public $nombre_paciente;
    public $fecha_nacimiento;
    public $edad;
    public $estudios;
    public $medico;
    public $telefono_paciente;
    public $hora;
    public $fecha_estudios;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre_paciente = $args['nombre_paciente'] ?? '';
        $this->fecha_nacimiento = $args['fecha_nacimiento'] ?? '';
        $this->edad = $args['edad_paciente'] ?? null;
        $this->estudios = $args['estudios'] ?? null;
        $this->medico = $args['medico'] ?? null;
        $this->telefono_paciente = $args['telefono_paciente'] ?? null;
        $this->hora = $args['hora'] ?? null;
        $this->fecha_estudios = $args['fecha_estudios'] ?? null;
    }

    public function validarFormulario()
    {
        if (!$this->nombre_paciente) {
            self::$alertas[] = 'El nombre completo del paciente es obligatorio';
        } elseif (!$this->fecha_nacimiento) {
            self::$alertas[] = 'La fecha de nacimiento del paciente es obligatoria';
        } elseif (!$this->estudios) {
            self::$alertas[] = 'Los estudios del paciente son obligatorios';
        } elseif (!$this->medico) {
            self::$alertas[] = 'Debes seleccionar un medico';
        } elseif (!$this->telefono_paciente) {
            self::$alertas[] = 'El telefono del paciente es obligatorio';
        } elseif (!$this->hora) {
            self::$alertas[] = 'La hora es obligatoria';
        } elseif (!$this->fecha_estudios) {
            self::$alertas[] = 'La fecha del estudio es obligatoria';
        }


        return self::$alertas;
    }
}
