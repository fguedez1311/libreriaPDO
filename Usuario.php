<?php
    require_once "autoload.php";
    class Usuario extends db{
        private $strNombre;
        private $intTelefono;
        private $strEmail;
        private $conexion;

       
        public function insertUsuario(string $nombre,int $telefono, string $email){
            $this->strNombre=$nombre;
            $this->intTelefono=$telefono;
            $this->strEmail=$email;
            $conexion=$this->connect();
            $sql="INSERT INTO usuario(nombre,telefono,email)VALUES(?,?,?)";
            $insert=$conexion->prepare($sql);
            $arrayData=array($this->strNombre, $this->intTelefono,$this->strEmail);
            $resInsert=$insert->execute($arrayData);
            $idInsert=$conexion->lastInsertId();
            return $idInsert;
        }
     } 