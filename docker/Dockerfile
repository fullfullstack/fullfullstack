FROM ubuntu:16.04
MAINTAINER Lgm <luisgmore@gmail.com>
RUN apt-get update && apt-get install -y build-essential software-properties-common python-software-properties git
RUN LC_ALL=C.UTF-8 apt-add-repository ppa:ondrej/php
RUN apt-get update && apt-get install -y php7.1-common \
                                         php-common \
                                         php-imagick \
                                         php-pear \
                                         php7.1 \
                                         php7.1-cli \
                                         php7.1-common \
                                         php7.1-curl \
                                         php7.1-dev \
                                         php7.1-fpm \
                                         php7.1-json \
                                         php7.1-mbstring \
                                         php7.1-mcrypt \
                                         php7.1-mysql \
                                         php7.1-opcache \
                                         php7.1-readline \
                                         php7.1-xdebug \
                                         php7.1-sqlite3 \
                                         php7.1-xml \
                                         sqlite3 \
                                         php7.1-zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer creates=/usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer
RUN sed -i '/listen =/c\listen = 0.0.0.0:9000' /etc/php/7.1/fpm/pool.d/www.conf
EXPOSE 9000
RUN  service php7.1-fpm start
CMD /usr/sbin/php-fpm7.1 -F
