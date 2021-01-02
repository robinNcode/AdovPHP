<?php
    /**
     * Creating the object of Route class
     * @var $routes
     */
    $routes = new Route();

    $routes->get('login',function(){
            Auth::index();
    });

    $routes->get('login-store',function(){
        Auth::store();
    });
    
    // $routes->get('test',function(){
    //     Test::base_url();
    // });

    $routes->get('home',function(){
        echo "Home";
    });
    

?>