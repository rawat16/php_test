FROM php:7.2-apache

COPY . /var/www/html/

RUN whoami

RUN ls -alh /var/www/html

RUN ls -alh /tmp

RUN chmod -R 777 /var/www/html/control/
RUN chmod -R 777 /var/www/html/public/
RUN chmod -R 777 /tmp