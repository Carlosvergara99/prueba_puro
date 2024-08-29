FROM php:8.2-fpm
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y \
        zip \
		libfreetype-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
        libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql  \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd


#COPY composer.json composer.json
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


EXPOSE 9000
CMD ["php-fpm"]
