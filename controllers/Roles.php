<?php
    require_once "models/Rol.php";
    class Roles{

        public function main(){
            echo "Acción main() del controlador Roles";
        }
        // Registrar usuarios
        public function createRol(){
            $rol = new Rol;
            $rol->setRolCode("abc-123");
            echo $rol->getRolCode();
        }
    }
?>