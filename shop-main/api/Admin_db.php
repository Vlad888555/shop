<?php

namespace App;

use mysqli;

class Admin_db{
    public $link;
    
    public function __construct(){
        $this->link = new mysqli("localhost", "root", "", "pract_shop");
    }

    public function get_orders(){
        $result = $this->link->query(
            "SELECT `o`.`Date`, `o`.`Comment`, `o`.`Content`, `u`.`Name`, `u`.`Login`, `u`.`Phone` FROM `orders` `o`
            LEFT JOIN `users` `u` ON `o`.`User_Id` = `u`.`Id` ORDER BY `o`.`Id` DESC"
        );
        if ($result && $result->num_rows){
            $result = $result->fetch_all(MYSQLI_ASSOC);
            return array_map(function($order) {
                $order["Content"] = json_decode($order["Content"], true);
                $order["Goods"] = [];
                $order["Total_price"] = 0;
                foreach ($order["Content"] as $key => $item){
                    $good = $this->link->query("SELECT * FROM `goods` WHERE `Id` = $key")->fetch_assoc();
                    $good["Count"] = $item;
                    $order["Goods"][] = $good;
                    $order["Total_price"] += $item * $good["Price"];
                }
                return $order;
            }, $result);
        }
        return[];
    }


    public function get_reviews() {
        $result = $this->link->query(
            "SELECT `r`.`Id`, `r`.`Text`, `r`.`Rate`, `r`.`Date`, `u`.`Login`, `u`.`Name` AS `User_name`, `g`.`Name` AS `Good_name` 
            FROM `reviews` `r`
            LEFT JOIN `users` `u` on `u`.`Id` = `r`.`User_id`
            LEFT JOIN `goods` `g` on `g`.`Id` = `r`.`Good_id`
            ORDER BY `r`.`Id` DESC"
        );
        if ($result && $result->num_rows){
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return [];
    }

    public function delete_review($id){
        $id = $this->link->real_escape_string($id);
        $this->link->query("DELETE FROM `reviews` WHERE `Id` = $id");
    }

    public function get_goods(){
        $result = $this->link->query("SELECT * FROM `goods`");
        if ($result && $result->num_rows){
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return [];
    }
}