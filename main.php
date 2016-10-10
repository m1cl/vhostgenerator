<?php 
require_once __DIR__ . '/vendor/autoload.php';
use vhost\generator;
use skeleton\skeleton;
$ahaha = array(
                'Port'=> '' ,
                'ServerName' => '',
                'ServerAdmin' => '',
                'DocumentRoot' => '',
                'Directory' => '',
                'Options' => '',
                'ErrorLogName' => '',
                'ErrLogDirectory' => '',
                'CustomLogDirectory'=> '',
                'CustomLogName' => ''
);

$vhostGenerator = new generator();
$skeleton = new skeleton();
$data = $vhostGenerator->data;

print_r( '-------------------------------' );
echo "\n";
print_r( 'Welcome to http vhost generator' );
echo "\n";
print_r( '-------------------------------' );
echo "\n";
foreach( $data as $key => $value ) {
    print_r($key);
    echo ":\t";
    $stdin = fopen ( 'php://stdin' , 'r' );
    $value = fgets( $stdin );
    $data[$key] = $value;
}
$stdin;
print_r(array_values($data));
$port = $vhostGenerator->getPort();
$file = "test.txt";
$current = file_get_contents($file);
$skeleton->makeSkeleton($data);
$current = $skeleton->getString(); 

file_put_contents($file, $current);
?>
