# Utiliser l'image debia officielle comme image parent
FROM debian:latest

# Installer des services et des packages
RUN apt-get update && \
    apt-get -y install  \
    apache2 \
    mariadb-server \
    mariadb-client \
    php \
    php-mysql \
    libapache2-mod-php 

RUN mkdir /data
# Copier les fichiers de l'hôte vers l'image
COPY ./start-script.sh /root/
COPY ./html /var/www/html
COPY ./data /data

# Exposer Apache
EXPOSE 3306
EXPOSE 80

# Lancer le service apache au démarrage du conteneur
RUN chmod +x /root/start-script.sh 
CMD ["/bin/bash", "/root/start-script.sh"]