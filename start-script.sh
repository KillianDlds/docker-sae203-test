#!/bin/bash
service mariadb start
#a2enmod rewrite

echo "<?php phpinfo(); ?>" > /var/www/html/info.php 

mysql < /data/create_db.sql

# Launch Apache
/usr/sbin/apache2ctl -DFOREGROUND
#service apache2 start