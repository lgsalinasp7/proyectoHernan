# Dockerfile
FROM php:7.4-apache

# Instala las extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copia el código de la aplicación al contenedor
COPY . /var/www/html/

# Copia la configuración de Apache
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Exponer el puerto 80
EXPOSE 80