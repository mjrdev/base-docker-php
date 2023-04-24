FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    unzip

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# COPY ./conf/php.ini /usr/local/etc/php/

WORKDIR /var/www

COPY . .

RUN composer install --prefer-dist --no-scripts --no-dev --no-autoloader && \
    composer clear-cache && \
    rm -rf /root/.composer

RUN composer dump-autoload --no-scripts --no-dev --optimize

RUN chown -R www-data:www-data /var/www && \
    chmod -R 755 /var/www/storage

EXPOSE 9000

CMD ["php-fpm"]
