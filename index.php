<?php
require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use my_class\helper_class;
use Models\User;
use Models\customer;
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
    if (helper_class::address_request() == "/login") {
        if($_REQUEST['title'] !=="" && strlen($_REQUEST['title']) < 20 && $_REQUEST['name']!=="" && strlen($_REQUEST['name']) < 20 && $_REQUEST['phone']!=="" && strlen($_REQUEST['phone']) < 20){
            $save_data = new customer();
            $save_data->name = htmlspecialchars($_REQUEST['name']);
            $save_data->phone = htmlspecialchars($_REQUEST['phone']);
            $save_data->email = htmlspecialchars($_REQUEST['title']);
            $save_data->save();
            echo json_encode(['message'=>'successfully']);
        }else{
            dd('validation error!');
        }
    } elseif (helper_class::address_request() == "/show_customer") {
        foreach (customer::all() as $key=>$data){
            echo json_encode($data);
        }
    } else {
        return json_encode(['error'=>'route not found']);
    }


}


?>