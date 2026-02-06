<?php
require_once 'conexion.php';
class Paciente extends Conexion {

    public $mysqli;
    public $data;

    public function __construct() {
        $this->mysqli = parent::conectar();
        $this->data = array();
    }

    //*****************************************************************
    // LISTAMOS DE PACIENTES
    //*****************************************************************
    
    public function pacientes(){
        $resultado = $this->mysqli->query("SELECT * FROM pacientes");

        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }

        if (isset($data)) {
            return $data; 
        } 
        
    }

    //*****************************************************************
    // PACIENTE POR ID
    //*****************************************************************

    public function paciente_id($id){

        $consulta = sprintf("SELECT
            *
            FROM
            pacientes
            WHERE
            paciente_id = %s", 
            parent::comillas_inteligentes($id)
            );

        $resultado = $this->mysqli->query($consulta);
        $fila = $resultado->fetch_array();
        return $fila;
    }

}