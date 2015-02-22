# PHP-Smarty-MVC
A basic MVC framework for PHP which uses the Smarty template engine and an open schema database (based on the <a href="reddit.com">reddit</a> data model).

### Add the following to your .htaccess or Apache config:
RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-f

RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule ^(.*)$ index.php?rt=$1 [L,QSA]
