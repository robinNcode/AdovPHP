<?php namespace App\Controllers;
use App\Models\ImageModel;
    class Auth extends BaseController{

        protected $image = null;

        /**
         * Auth constructor
         */
        public function __construct()
        {
            self::$image = new ImageModel();
        }

        public static function index(){
            
            echo '<pre>';
            var_dump(self::$image->getImage());
            echo '</pre>';
            
            die();
            echo include('app/Views/Login/Login.php');
        }

        public static function store(){
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
            die();
        }
    }