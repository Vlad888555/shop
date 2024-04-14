<?php

namespace App;

class Helpers{
    static function get_d_f_date($date){
        $day = $date->format("d");
        $month = intval($date->format("m"));
        $months = [
            "",
            "января",
            "февряля",
            "марта",
            "апреля",
            "мая",
            "инюня",
            "июля",
            "августа",
            "сентября",
            "октября",
            "ноября",
            "декабря"

        ];
        return "$day $months[$month]";
    }
}