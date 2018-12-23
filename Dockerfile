FROM php:7.2-apache
COPY . /var/www/html/


RUN chmod 755 /var/www/html/public/storagefile