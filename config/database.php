<?php
    class Conectar {
        public static function conexion(){
            $usuario = 'root';
            $contraseña = '';
            $mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);
            return $mbd;
        }
    }
?>
