<?php
    /**
     * @author robinNcode
     * To control all routes in this project
     */
    class Route{

        public $validRoutes = array();

        public function get($route,$function){
            $this->validRoutes = $route;

            var_dump( $this->validRoutes);
            if($_GET['url'] == $route){
                $function->__invoke();
            }
            
            
        }
    }
?>