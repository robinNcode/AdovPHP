<?php
    class Auth extends BaseController{

        protected $image = null;

        /**
         * Auth constructor
         */
        public function __construct()
        {
            $this->image = new ImageModel();
        }

        public function index(){
            
            echo '<pre>';
            var_dump($this->image->getImage());
            echo '</pre>';
            
            die();
            echo include('app/Views/Login/Login.php');
        }

        public function store(){
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
            die();
        }
    }