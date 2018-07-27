<?php

require_once('DB.php');

class Validator {

        function validateRegister($datos, DB $db) {
            
            $errores = [];
    
            foreach ($datos as $clave => $valor) {
                $datos[$clave] = trim($valor);
            }

            if (empty($datos["nombre"])) {
                $errores["nombre"] = "Debe ingresar un nombre";
              }
          
              if (empty($datos["email"])) {
                $errores["email"] = "Debe ingresar un email";
              } else if (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL) ) {
                $errores["email"] = "El email ingresado no es válido";
              } else if ($db->searchUser($datos["email"]) != NULL) {
                $errores["email"] = "El email ingresado ya existe";
              }

              if (empty($datos["usuario"])) {
                $errores["usuario"] = "Debe ingresar un nombre de usuario";
              } else if ($db->searchUser($datos["usuario"]) != NULL) {
                $errores["usuario"] = "El nombre de usuario ingresado ya existe";
              }
          
              if (empty($datos["password"])) {
                $errores["password"] = "Debe ingresar una contraseña";
              }
              else if (strlen($datos["password"]) < 5) {
                $errores["password"] = "La contraseña debe tener al menos 5 caracteres";
              } 

              if ($datos["cpassword"] == "") {
                $errores["cpassword"] = "La contraseña va dos veces";
            }

            if ($datos["password"] != "" && $datos["cpassword"] != "" && $datos["password"] != $datos["cpassword"]) {
                $errores["password"] = "Las contraseñas no coinciden";
            }
          
            return $errores;

        
        }

        public function validateLogin($datos, DB $db) {
            $errores = [];
    
            foreach ($datos as $clave => $valor) {
                $datos[$clave] = trim($valor);
            }

            if (empty($datos["usuario"])) {
                $errores["usuario"] = "Debe ingresar un nombre de usuario";
            } else if ($db->searchUser($datos["usuario"]) == NULL) {
                $errores["usuario"] = "El nombre de usuario ingresado no existe";
            } 

            $usuario = $db->searchUser($datos["usuario"]);

           
            if (empty($datos["password"])) {   
                $errores["password"] = "Debe ingresar una contraseña";
            } else if ($usuario != null) {
                if (password_verify($datos["password"], $usuario->getPassword()) == false) {
                    $errores["password"] = "La contraseña ingresada no es válida";
                }
            }
            return $errores;
        }
    
    }

?>