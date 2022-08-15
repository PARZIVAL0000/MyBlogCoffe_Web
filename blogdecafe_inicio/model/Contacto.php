<?php  namespace Model;

    use Model\ActiveRecord;

    class Contacto extends ActiveRecord{
        protected static $tabla = 'contactos';
        protected static $columnas_DB = [
            'id',
            'Nombre', 
            'Email', 
            'Mensaje'
        ];

        public $id;
        public $Nombre;
        public $Email;
        public $Mensaje;

        public function __construct($args = [])
        {
            $this->id = $args['id'] ?? null;
            $this->Nombre = $args['Nombre'] ?? '';
            $this->Email = $args['Email'] ?? '';
            $this->Mensaje = $args['Mensaje'] ?? '';
        }


        public function ValidarEntradas(){
            if(!$this->Nombre){
                self::$alertas[]['error'] = 'Debes colocar un nombre';
            }

            if(!$this->Email){
                self::$alertas[]['error'] = 'Ayudarnos con tu email será más fácil notificarte sugerencias y más cursos';
            }

            if(!$this->Mensaje){
                self::$alertas[]['error'] = 'Un comentario hará crecer este sitio web';
            }

            return self::$alertas;
        }
    }
?>