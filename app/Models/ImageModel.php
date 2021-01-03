<?php 
		namespace App\Models;
    class ImageModel extends Database{

        public function getImage()
        {
            return self::query("SELECT * FROM img");
        }
    }