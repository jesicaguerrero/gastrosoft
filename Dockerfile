# Usa una imagen base con Apache y PHP
FROM php:8.1-apache

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Exponer el puerto 80
EXPOSE 80

# Comando de inicio
CMD ["apache2-foreground"]
