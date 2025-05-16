FROM php:8.1-apache

# Gushyira index.php aho Apache ishyira amafayilo
COPY index.php /var/www/html/index.php

# Gutanga uburenganzira kuri folder
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Gushyiramo DirectoryIndex kugira ngo Apache yinjire muri index.php
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf
