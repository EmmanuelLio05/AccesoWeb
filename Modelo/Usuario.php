<?php
    class Usuario{
        //---Atributos
        private $nId;
        private $sAlias;
        private $sPassword;
        private $sNombre;
        private $sApellidos;
        private $bActivo;
        private $sRol;
    
        //--- Sets
        public function setId($Id){
            $this->$nId=$Id;
        }

        public function setAlais($Alias){
            $this->$sAlias=$Alias;
        }

        public function setPassword($Password){
            $this->$sPassword=$Password;
        }

        public function setNombre($Nombre){
            $this->$sNombre=$Nombre;
        }

        public function setApellidos($Apellidos){
            $this->$sApellidos=$Apellidos;
        }

        public function setActivo($Activo){
            $this->$bActivo=$Activo;
        }

        public function setRol($Rol){
            $this->$sRol=$Rol;
        }

        //--- Gets
        public function getId(){
            return $this->$nId;
        }

        public function getAlias(){
            return $this->$sAlias;
        }

        public function getPassword(){
            return $this->$sPassword;
        }

        public function getNombre(){
            return $this->$sNombre;
        }

        public function getApellidos(){
            return $this->$sApellidos;
        }

        public function getActivo(){
            return $this->$bActivo;
        }

        public function getRol(){
            return $this->$sRol;
        }
    }
?>