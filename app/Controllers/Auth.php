<?php
		use App\Models\ImageModel;

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
            dd($this->image->getImage());
            echo '</pre>';

            echo include('app/Views/Login/Login.php');
        }

        public function store(){
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
            die();
        }
    }