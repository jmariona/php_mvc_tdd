<?php
require_once  __DIR__.'/../bootstrap/bootstrap.php';


use Illuminate\Database\Capsule\Manager as Capsule;


$app_name = getenv('APP_NAME');
print_r($app_name);


$user = Capsule::table('users')->get();
d($user);