<?php
require dirname(__DIR__). '\plugins\redis\src\Autoloader.php';
Predis\Autoloader::register();
$args = [
    'scheme' => 'tcp',
    'host'   => 'microtraitdb.redis.cache.windows.net',
    'port'   => 6380,
];
$options = [
    'parameters' => [
        'password' => 'OPl6NTSBkG5H29bpN2xJBbNhgakRDBb4kMQc+2VE7CQ=',
        'ssl' => 'True',
        'abortConnect'=>'False',
    ]
];
//'ssl=True,abortConnect=False'
$client = new Predis\Client($args,$options);

$client->set('foo','bae');
if(!isset($_GET['id'])){
    echo 'ID not found';
    die;
}
echo 'Do things with ID here';
