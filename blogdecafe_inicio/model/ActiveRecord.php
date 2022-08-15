<?php namespace Model;
    //Conjunto de funciones importantes y compartidas a los demas modelos.
    class ActiveRecord{
        protected static $db;
        //Las demás clases heredarán de esta clase y 
        //rellenaran estas propiedades.
        protected static $tabla = ''; 
        protected static $columnas_DB = [];

        //Generar las alertas, basado en el tipo que sea #exito o un #error.
        protected static $alertas = [];

        public static function setDB($databases){
            self::$db = $databases;
        }

        public static function setAlerta($tipo, $mensaje){
            self::$alertas[][$tipo] = $mensaje;
        }

        public static function getAlerta(){
            return self::$alertas;
        }

        //procesar los valores.
        public function SettingValores(){
            $args = [];
            foreach($this AS $key=>$value){
                if($key === "id")continue;
                $args[$key] = self::$db->escape_string($value);
            }

            foreach($args AS $key=>$value){
                self::$columnas_DB[$key]= $value;
            }

            return self::$columnas_DB;
        }

        // public function SettingColumnDB(){
        //     $resultado = $this->SettingValores();

        //     $myObjt = new static;

        //     foreach($myObjt AS $key=>$value){
        //         $myObjt->$key = $resultado[$key] ?? null;
        //     }
          
        //     return $myObjt;
        // }   

        //Sanitizado todos nuestros datos.
        public function valoresSanitizados(){
            $arreglo = [];
            $respuesta = $this->SettingValores();
            foreach($respuesta AS $key=>$value){
                $arreglo[$key] = $value;
            }

            return $arreglo;
        }


        public function guardar(){
            $respuesta = '';
            if(is_null($this->id)){
                //llamamos a la función de crear.
                $respuesta = $this->crear();
            }else{
                //llamamos a la función de actualizar.
                $respuesta = $this->actualizar();
            }

            return $respuesta;
        }

       
        //crearemos para poder insertarlo dentro de nuestra base de datos.
        public  function crear(){
            $sanitizado = $this->valoresSanitizados();

            $query = "INSERT INTO " . $this::$tabla . " (";
            $query .= join(' , ', array_keys($sanitizado));
            $query .= " ) VALUES ('";
            $query .= join( "','",array_values($sanitizado));
            $query .= "') ";
            
            $respuesta = self::$db->query($query);
           
            return [
                    'respuesta' => $respuesta,
                ];
            
        }

        public static function actualizar(){
            // $sanitizado = $this->valoresSanitizados();
        }


        public function sincronizar($args = []){
            foreach($args AS $key=>$value){
                if(property_exists($this, $key)){
                    $this->$key = $value;
                }
            }
        }
    }
?>