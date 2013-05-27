<?php

#########################################################
# cPanel Backup Script                                  #
#                                                       #
# Author: Álvaro Salcedo (@alvrSG)                      #
# Website: http://alvr.me                               #
#########################################################

$host       = ""; //Domain to backup
$cP_user    = ""; //Your cPanel username
$cP_pass    = ""; //Your cPanel password
$cP_theme   = ""; //Your cPanel theme (usually 'x3')
$FTP_host   = ""; //Your FTP host (you can host it in other website, see: drivehq.com)
$FTP_user   = ""; //Your FTP username
$FTP_pass   = ""; //Your FTP password
$FTP_port   = ""; //Your FTP port (usually 21)
$FTP_method = ""; //FTP method to upload the backup (ftp or scp)
$FTP_dir    = ""; //Directory to save your backups.
$email      = ""; //Your email

//DON'T EDIT ANYTHING BELOW THIS LINE!!

$login = "$cP_user:$cP_pass"; 
$auth = base64_encode($login); 
$socket = fsockopen($host, 2082);
 
if(!$socket) {
 
  echo "$errstr ($errno)";
  
} else { 

	fputs($socket, "POST /frontend/$cP_theme/backup/dofullbackup.html?dest=$FTP_method&email=$email&server=$FTP_host&user=$FTP_user&pass=$FTP_pass&rdir=$FTP_dir&port=$FTP_port&submit=Generate Backup\r\n"); 
	fputs($socket, "HTTP/1.0\r\n"); 
	fputs($socket, "Host: $host\r\n"); 
	fputs($socket, "Authorization: Basic $auth \r\n"); 
	fputs($socket, "Connection: close\r\n\r\n"); 

	while (!feof($socket)) {
	
		$request = fgets($socket, 4096);
		
	} 
	
	echo "Done."; 
	
	fclose($socket); 
	
}
 
?>