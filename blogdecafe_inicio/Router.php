<?php namespace MVC;

    class Router{

        public array $GET = [];
        public array $POST = [];

        public function get($ruta, $fn){
            return $this->GET[$ruta] = $fn;
        }

        public function post($ruta, $fn){
            return $this->POST[$ruta] = $fn;
        }

        public function diagnosticar(){
            $method = $_SERVER["REQUEST_METHOD"];
            $path = empty($_SERVER["PATH_INFO"]) ? '/' : $_SERVER["PATH_INFO"];

           if(empty($this->GET["{$path}"])){
                echo 'error... página no encontrada';
           }else{
            
                if($method === "GET"){
                    $fn = $this->GET[$path] ?? '/';
                }else{
                    $fn =$this->POST[$path] ?? '/';
                }

                    
                if($fn){
                    call_user_func($fn, $this);
                }else{
                    echo 'error... página no encontrada.';
                }
           }

        }

        public function render($path, $valores = []){
            foreach($valores AS $key=>$value){
                $$key = $value;
            }
            
            ob_start();
            include_once __DIR__. "/views/{$path}.php";
            $contenido = ob_get_clean(); //es importante.
            include_once __DIR__."/views/layout.php";
        }
    }
?>