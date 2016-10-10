<?php 
namespace vhost;
require_once ('skeleton.php');
class generator
{

    private $port = 80;
    private $serverName;
    private $documentRoot;
    private $serverAdmin;
    private $directory;
    private $options;
    private $allowOverride; 
    private $errLogDirectory;
    private $errLogName;
    private $customLogDirectory;
    private $customLogName;
    public $data = array(
        "Port" => 80,
        "ServerName" => '',
        "DocumentRoot" => '',
        "ServerAdmin" => '',
        "Directory" => '',
        "Options" => 'Indexes FollowSymLinks MultiViews',
        "AllowOverride" => '', 
        "ErrLogDirectory" => '',
        "ErrLogName" => '',
        "CustomLogDirectory" => '',
        "CustomLogName" => ''
    );
}



