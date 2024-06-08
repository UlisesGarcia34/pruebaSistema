<?php


namespace Model;

class Usuario extends ActiveRecord{

    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'password'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? null;
        
    }

    public function validarLogin()
    {

        if (!$this->password || !$this->email) {
            self::$alertas['alert-danger'][] = 'El email y el password son obligatorios';
        }

        return self::$alertas;
    }

}