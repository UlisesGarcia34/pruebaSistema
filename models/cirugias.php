<?php


namespace Model;

class Cirugias extends ActiveRecord
{

    protected static $tabla = 'cirugias';
    protected static $columnasDB = ['id', 'hora', 'paciente', 'empresa', 'quirofano1', 'lio','quirofano2', 'cirujano','ayudante',
    'anestesia','anestesiologo','telefono_paciente', 'emailPaciente'];

    public $id;
    public $hora;
    public $paciente;
    public $empresa;
    public $quirofano1;
    public $lio;
    public $quirofano2;
    public $cirujano;
    public $ayudante;
    public $anestesia;
    public $anestesiologo;
    public $telefono_paciente;
    public $emailPaciente;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->hora = $args['hora'] ?? '';
        $this->paciente = $args['paciente'] ?? '';
        $this->empresa = $args['empresa'] ?? null;
        $this->quirofano1 = $args['quirofano1'] ?? null;
        $this->lio = $args['lio'] ?? null;
        $this->quirofano2 = $args['quirofano2'] ?? null;
        $this->cirujano = $args['cirujano'] ?? null;
        $this->ayudante = $args['ayudante'] ?? null;
        $this->anestesia = $args['anestesia'] ?? null;
        $this->anestesiologo = $args['anestesiologo'] ?? null;
        $this->telefono_paciente = $args['telefono_paciente'] ?? null;
        $this->emailPaciente = $args['emailPaciente'] ?? null;
        
    }

    public function validarFormulario()
    {
        if (!$this->paciente) {
            self::$alertas[] = 'El nombre completo del paciente es obligatorio';
        } elseif (!$this->empresa) {
            self::$alertas[] = 'El nombre de la empresa es obligatoria';
        } elseif (!$this->cirujano) {
            self::$alertas[] = 'Debes ingresar el nombre del cirujano';
        } elseif (!$this->anestesia) {
            self::$alertas[] = 'Debes ingresar el nombre de la anestesia';
        } elseif (!$this->anestesiologo) {
            self::$alertas[] = 'Debes ingresar el nombre del médico anestesiologo';
        } elseif (!$this->telefono_paciente) {
            self::$alertas[] = 'El número telefonico del pacientes es importante ingresarlo';
        } elseif (!$this->emailPaciente) {
            self::$alertas[] = 'El correo electrónico del paciente es importante ingresarlo';
        } elseif (!$this->hora) {
            self::$alertas[] = 'La hora es obligatoria';
        }


        return self::$alertas;
    }
}
