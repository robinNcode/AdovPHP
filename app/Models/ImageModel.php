<?php namespace App\Models;
use App\Config\Database;
    class ImageModel extends Database{

        public function getImage()
        {
            echo '<pre>';
            var_dump($this->query("SELECT * FROM super_admin"));
            echo '</pre>';
            die();

            return $this->query("SELECT * FROM super_admin");
        }
    }