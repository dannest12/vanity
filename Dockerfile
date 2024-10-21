# Usa la imagen base de PHP con Apache
FROM php:7.4-apache

# Instala las extensiones necesarias de PHP para conectarse a MySQL y manejar sesiones
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql

# Copia el código de Vanity al directorio raíz de Apache
COPY . /var/www/html/

# Otorga permisos correctos para el directorio donde estará la aplicación
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Habilita el módulo de reescritura de URL de Apache (mod_rewrite)
RUN a2enmod rewrite

# Establece el punto de montaje de trabajo como el directorio de la aplicación
WORKDIR /var/www/html

# Expone el puerto 80 para la aplicación web
EXPOSE 80

# Comando por defecto al iniciar el contenedor: inicia Apache en primer plano
CMD ["apache2-foreground"]
