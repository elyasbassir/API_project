<?php

namespace my_class;

class helper_class
{
    const dir = "API_project/";


    static public function address_request()
    {
        return explode('?',str_replace(self::dir,"",$_SERVER['REQUEST_URI']))[0];
    }
}