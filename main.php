<?php 
require_once __DIR__ . '/vendor/autoload.php';
use vhost\generator;
use skeleton\skeleton;
$data = array(
                'Port'=> '' ,
                'ServerName' => '',
                'ServerAdmin' => '',
                'Directory' => '',
                'Options' => '',
                'ErrorLogName' => '',
                'ErrorLogDirectory' => '',
                'CustomLogDirectory'=> '',
                'CustomLogName' => ''
);

$vhostGenerator = new generator();

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
}
$stdin;
$port = $vhostGenerator->getPort();
$file = "test.txt";
$current = file_get_contents( $data );
$skeleton->makeSkeleton();
$current = $skeleton->getString(); 

file_put_contents($file, $current);
?>
