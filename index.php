<?php
require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use my_class\helper_class;
use Models\User;

$capsule = new Capsule();
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'jahanafza',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(helper_class::address_request() == "/login"){
        $save = new User();
        $save->name= "elyas";
        $save->phone= '09152655133';
        $save->email= "asdasd@gmail.com";
        $save->save();
    }elseif(helper_class::address_request() == "/register"){
        dd('register');
    }else{
        dd('error');
    }


}


?>