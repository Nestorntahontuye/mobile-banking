FROM php:8.1-apache

# Shyiramo amafayile yawe
COPY . /var/www/html/

# Hindura permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Menyesha Apache ko index.php ari yo ibanza
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf

# Tangiza Apache
CMD ["apache2-foreground"]
