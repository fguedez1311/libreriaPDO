<?php
    require_once "autoload.php";
    class Usuario extends db{
        private $strNombre;
        private $intTelefono;
        private $strEmail;
        

       
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

        public function getUsuarios(){
            $sql="SELECT * FROM  usuario";
            $execute=$this->connect()->query($sql);
            $request=$execute->fetchAll(PDO::FETCH_ASSOC);
            return $request;
        }
        public function updateUser(int $id,string $nombre,int $telefono, string $email){
            $this->strNombre=$nombre;
            $this->intTelefono=$telefono;
            $this->strEmail=$email;
            $sql="UPDATE usuario SET nombre=?,telefono=?,email=? WHERE id=$id";
            $update=$this->connect()->prepare($sql);
            $arrayData=array($this->strNombre, $this->intTelefono,$this->strEmail);
            $resExecute=$update->execute($arrayData);
            return $resExecute;
        }
        // Extraer un registro de la BD

        public function getUser(int $id){
            $sql="SELECT * FROM usuario WHERE id=?";
            $arrayWhere=array($id);
            $query=$this->connect()->prepare($sql);
            $query->execute($arrayWhere);
            $request=$query->fetch(PDO::FETCH_ASSOC);
            return $request;
        }
        // Borrar un registro de la BD
        
        public function deluser(int $id){
            $sql="DELETE FROM usuario WHERE id=?";
            $arrayWhere=array($id);
            $delete=$this->connect()->prepare($sql);
            $del=$delete->execute($arrayWhere);
            return $del;
        }
     } 