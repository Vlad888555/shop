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

    public function get_reviews(){
        $result = $this->link->query(
            "SELECT * FROM `reviews`
            LEFT JOIN `users` `u` on `u`.`Id` = `reviews`.`User_id`
            LEFT JOIN `goods` `g` on "
        );
    }
}