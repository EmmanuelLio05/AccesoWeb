<?php

class UsuarioDao {
    private $server="localhost";
    private $usr="root";
    private $pass ="";
    private $db ="control";

    private function conectar(){
                try{
                    $mysqli = new mysqli($this->server,
                                         $this->usr,
                                         $this->pass,
                                         $this->db
                                        );
                    return $mysqli; 
                }catch(RuntimeException $e){
                    echo 'Fallo la conexion: '. $e->getMessage();
                                  
        }
    }

    public function consulta($csql){
        $conexion = $this->conectar();
        $resultado = $conexion->query($csql);
        return $resultado;
    }
}