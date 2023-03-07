<?php
    class Auth extends BaseController{

        protected $image = null;

        /**
         * Auth constructor
         */
        public function __construct()
        {
            //$this->image = new ImageModel();
        }

        public function index(){
            dd('Hello World');
            echo include('app/Views/Login/Login.php');
        }

        public function store(){
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
            die();
        }
    }