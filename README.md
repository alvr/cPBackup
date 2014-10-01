cPBackup
=====

With cPBackup you can backup your cPanel account. That includes email, FTP, databases... ALL.

##Configuration

You only need to edit lines between 10 and 20.

```php
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
```
##Usage

Now it's time to prepare your Cron Job.

1. Login to your cPanel account. 
2. Upload your configured script in your root folder. (**NOT** public_html)
3. Click "Cron Jobs". 
4. On the common settings drop down choose the time and interval you want the 
backups to run. 
5. In the command type the following. `php -q /home/CPANELUSERNAME/cPBackup.php` 
6. Click "Add New Cron Job".

> Replace CPANELUSERNAME with your cPanel username.

&copy; 2013 [alvrSG](http://alvr.me)

[+info](http://code.alvr.me/projects/cpbackup)