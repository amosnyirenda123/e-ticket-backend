#à partir de l'image officielle de php
FROM php:8.2-apache

#installer les extensions necessaires
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install mysqli pdo_mysql mbstring

# Ajouter d'abord le dossier phpMyAdmin
#Copier le fichier de configuration phpMyAdmin
COPY ./phpmyadmin /var/www/html
COPY config.inc.php /var/www/html/config.inc.php

# Fixer le message "Could not reliably determine the server's fully qualified domain name"
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

#Configurer le serveur
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 /var/www/html

#Active la reecriture d'URL d'apache si besoin
RUN a2enmod rewrite

CMD ["apache2ctl", "-D", "FOREGROUND"]

#ouvrir le port httpin
EXPOSE 80
