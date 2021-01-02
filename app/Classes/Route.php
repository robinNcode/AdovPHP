<?php
    /**
     * @author robinNcode
     * To control all routes in this project
     */
    class Route{

        public static $validRoutes = array();

        public static function get($route,$function){
            self::$validRoutes = $route;

            //var_dump(self::$validRoutes);
            if($_GET['url'] == $route){
                $function->__invoke();
            }
            
            
        }
    }
?>