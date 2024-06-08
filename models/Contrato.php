<?php


namespace Model;

class Contrato extends ActiveRecord
{

    protected static $tabla = 'contrato';
    protected static $columnasDB = ['id', 'contrato_no', 'representado', 'pdf','escritura_no'];

    public $id;
    public $contrato_no;
    public $representado;
    public $pdf;
    public $escritura_no;
 

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->contrato_no = $args['contrato_no'] ?? '';
        $this->representado = $args['representado'] ?? '';
        $this->pdf = $args['pdf'] ?? null;
        $this->escritura_no = $args['escritura_no'] ?? null;
    }

    public function validarFormulario()
    {
        if (!$this->representado) {
            self::$alertas[] = 'El campo representado es obligatorio';
        }elseif (!$this->escritura_no) {
            self::$alertas[] = 'El campo "escritura publica No." es obligatorio';
        }
        

        return self::$alertas;
    }

   
}
