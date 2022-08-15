<?php namespace Controllers;

use Model\ActiveRecord;
use MVC\Router;
use Model\Contacto;

    class ContactoControllers{
        
        public static function index(Router $router){
            
            //ruta
            $ruta = '';
            if(isset($_SERVER["PATH_INFO"])){
                $ruta = $_SERVER["PATH_INFO"];
            }
            

            $router->render('espacio/index', [
                'titulo' => 'Aprendiendo con recetas y consejos',
                'ruta' => $ruta,
            ]);
        }

        public static function entrada(Router $router){
            $ruta = '';

            $router->render('espacio/entrada', [
                'titulo' => 'Sobre nosotros',
                'ruta' => $ruta,
            ]);
        }

        public static function contacto(Router $router){
            //contactos
            $contactos = new Contacto();
            
            $alertas = [];
            
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $contactos->sincronizar($_POST);

                $alertas = $contactos->ValidarEntradas();

                if(empty($alertas)){
                   //guardaremos todas nuestros datos. 

                   $respuesta = $contactos->guardar();
                   if($respuesta['respuesta']){
                        header('location: /contacto');
                   }
                }
            }
            
            $router->render('espacio/contacto', [
                'titulo' => 'Contacto',
                'ruta' => $_SERVER["PATH_INFO"],
                'alertas' => $alertas,
                'datos' => $contactos
            ]);
        }

        public static function nosotros(Router $router){
            $router->render('espacio/nosotros', [
                'titulo' => 'Sobre Nosotros',
                'ruta' => $_SERVER["PATH_INFO"],
            ]);
        }

        public static function cursos(Router $router){
            $router->render('espacio/cursos',[
                'titulo' => 'Nuestros Cursos',
                'ruta' => $_SERVER["PATH_INFO"],
            ]);
        }
    }
?>