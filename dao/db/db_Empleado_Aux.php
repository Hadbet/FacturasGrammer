<?php
class LocalConectorAux{
    private $host = "127.0.0.1:3306";
    private $usuario = "u909553968_Gramito";
    private $clave = "Grammer2024";
    private $db = "u909553968_Parte";
    public $conexion;
    public function conectarAux(){
        $conAux = mysqli_connect($this->host,$this->usuario,$this->clave,$this->db);
        return $conAux;
    }
}
?>