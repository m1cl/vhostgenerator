<?php
namespace skeleton;
class skeleton
{
    private $skeletonString;

    public function getString()
    {
        return $this->skeletonString;
    }
    
    // TODO remove new line after variable
    public function makeSkeleton($data)
    {
        $hello = "hello World";
       $this->skeletonString = <<<"EOD"
	   <VirtualHost *:$data[Port]>
			ServerName $data[ServerName]
			ServerAdmin $data[ServerAdmin]
			DocumentRoot $data[DocumentRoot]
			<Directory $data[Directory]> 
					Options $data[Options]
					AllowOverride None
					Order allow,deny
					allow from all
			</Directory>
			LogLevel warn
			ServerSignature On
		ErrorLog $data[ErrLogDirectory]/$data[ErrLogName]
		CustomLog $data[CustomLogDirectory]/$data[CustomLogName] common
	</VirtualHost>
EOD;
    } 
}
