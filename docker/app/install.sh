#!/bin/sh

chown -R www-data:www-data /var/www/html/writable
chmod -R 775 /var/www/html/writable
composer install
