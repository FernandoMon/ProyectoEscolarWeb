<?php namespace Config;

    class Autoload{

        public static function run(){
            spl_autoload_register(function($class){
                $ruta = str_replace("\\","/",$class) . ".php";
                if(is_readable($ruta)){
                    include_once $ruta;  
                    // print $ruta;      
                }else{
                    $ruta = str_replace("Models\\","",$class) . ".php";
                    include_once $ruta;
                    //print $ruta;
                } 
            });
            // echo 'Holaa todos desde Autoload';
        }


    }

?>