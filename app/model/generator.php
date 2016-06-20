<?php 
namespace vhost;
require_once ('skeleton.php');
class generator
{
    private static $port = 80;
    private $serverName;
    private $documentRoot;
    private $serverAdmin;
    private $directory;
    private $options = "Indexes FollowSymLinks MultiViews";
    private $allowOverride; 
    private $errLogDirectory;
    private $errLogName;
    private $customLogDirectory;
    private $customLogName;
 
    /**
     * @return serverName
     */
    public function getServerName()
    {
        return $this->serverName;
    }

    /**
     * @param $serverName
     */
    public function setServerName($serverName)
    {
        $this->serverName = $serverName;
    }
        /**
     * @return documentRoot
     */
    public function getDocumentRoot()
    {
        return $this->documentRoot;
    }

    /**
     * @param $documentRoot
     */
    public function setDocumentRoot($documentRoot)
    {
        $this->documentRoot = $documentRoot;
    }
 
    /**
     * @return serverAdmin
     */
    public function getServerAdmin()
    {
        return $this->serverAdmin;
    }
 
    /**
     * @param $serverAdmin
     */
    public function setServerAdmin($serverAdmin)
    {
        $this->serverAdmin = $serverAdmin;
    }
 
    /**
     * @return directory
     */
    public function getDirectory()
    {
        return $this->directory;
    }
 
    /**
     * @param $directory
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory;
    }
 
    /**
     * @return options
     */
    public function getOptions()
    {
        return $this->options;
    }
 
    /**
     * @param $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }
 
    /**
     * @return allowOverride
     */
    public function getAllowOverride()
    {
        return $this->allowOverride;
    }
 
    /**
     * @param $allowOverride
     */
    public function setAllowOverride($allowOverride)
    {
        $this->allowOverride = $allowOverride;
    }
 
    /**
     * @return errLogDirectory
     */
    public function getErrLogDirectory()
    {
        return $this->errLogDirectory;
    }
 
    /**
     * @param $errLogDirectory
     */
    public function setErrLogDirectory($errLogDirectory)
    {
        $this->errLogDirectory = $errLogDirectory;
    }
 
    /**
     * @return errLogName
     */
    public function getErrLogName()
    {
        return $this->errLogName;
    }
 
    /**
     * @param $errLogName
     */
    public function setErrLogName($errLogName)
    {
        $this->errLogName = $errLogName;
    }

    /**
     * @return customLogDirectory
     */
    public function getCustomLogDirectory()
    {
        return $this->customLogDirectory;
    }
 
    /**
     * @param $customLogDirectory
     */
    public function setCustomLogDirectory($customLogDirectory)
    {
        $this->customLogDirectory = $customLogDirectory;
    }
 
    /**
     * @return customLogName
     */
    public function getCustomLogName()
    {
        return $this->customLogName;
    }
 
    /**
     * @param $customLogName
     */
    public function setCustomLogName($customLogName)
    {
        $this->customLogName = $customLogName;
    }
 
    /**
     * @return port
     */
    public function getPort()
    {
        return $this->port;
    }
}



