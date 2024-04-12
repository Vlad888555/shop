<?php

namespace App;

use mysqli;

class DB{
    public $link;
    
    public function __construct(){
        $this->link = new mysqli("localhost", "root", "", "pract_shop");
    }

    public function get_good_by_id($id){
        $id = $this->link->real_escape_string($id);
        $result = $this->link->query("SELECT * FROM `goods` WHERE `Id` = $id");
        if ($result && $result->num_rows){
            return $result->fetch_assoc();
        }
        return[];
    }

}

