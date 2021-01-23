<?php namespace App\Models;

use App\Config\Database;

class ImageModel extends Database
{
    public function getImage()
    {
        return self::query("SELECT * FROM img");
    }
}