<?php
namespace skeleton;
class skeleton
{
    private $skeletonString;

    public function getString()
    {
        return $this->skeletonString;
    }
    
    public function makeSkeleton($port, $serverName, $serverAdmin, $documentRoot, $directory, $options, $errLogDirectory, $errLogName, $customLogDirectory, $customLogName )
    {
       $this->skeletonString = <<<"EOD"
	   <VirtualHost *:$port>
			ServerName $serverName 
			ServerAdmin $serverAdmin
			DocumentRoot $documentRoot
			<Directory $directory > 
					Options $options
					AllowOverride None
					Order allow,deny
					allow from all
			</Directory>
			LogLevel warn
			ServerSignature On
		ErrorLog $errLogDirectory/$errLogName
		CustomLog "$customLogDirectory/$customLogName" common
	</VirtualHost>
EOD;
    } 
}
