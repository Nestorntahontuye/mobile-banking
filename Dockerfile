# Gufata image ya PHP na Apache
FROM php:8.1-apache

# Gushyiramo index.php na login.php muri Apache web root
COPY index.php /var/www/html/
COPY login.php /var/www/html/

# Gutanga uburenganzira kuri dosiye
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Gutuma Apache ishyiraho index.php nk'urupapuro rwa mbere
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf

EXPOSE 80
CMD ["apache2-foreground"]
