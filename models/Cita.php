<?php

namespace Model;

class Cita extends ActiveRecord
{

    // Configuración de la Base de Datos.
    protected static $tabla = 'citas';
    protected static $columnasDB = ['id', 'fecha', 'hora', 'clienteId'];

    public $id;
    public $fecha;
    public $hora;
    public $clienteId;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->fecha = $args['fecha'] ?? null;
        $this->hora = $args['hora'] ?? null;
        $this->clienteId = $args['clienteId'] ?? null;
    }
}
