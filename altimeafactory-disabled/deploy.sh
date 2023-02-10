#!/usr/bin/env bash

# Copy config files
cp -f /efs/deploys/permanent-files/altimea/altimea/dev/wp-config.php /var/www/html
cp -f /efs/deploys/permanent-files/altimea/altimea/dev/htaccess /var/www/html/.htaccess
cp -f /efs/deploys/permanent-files/altimea/altimea/dev/robots.txt /var/www/html

# Change data base

sed -i -e "s/{{ data-base }}/${DATA_BASE}/g" /var/www/html/wp-config.php

# Softlink to uploads
ln -s /efs/deploys/permanent-files/altimea/altimea/dev/wp-content/uploads /var/www/html/assets/uploads

# Fix permissions
chown www-data:www-data -R /var/www/html/assets/uploads /efs/deploys/permanent-files/altimea/altimea/dev/wp-content/uploads
chown www-data:www-data -R /var/www/html/.htaccess /var/www/html/robots.txt

# Remove 000-default.conf
rm -rf /etc/apache2/sites-available/000-default.conf

# Start Apache
service apache2 start