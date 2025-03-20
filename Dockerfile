FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libmariadb-dev \
    libmariadb-dev-compat \
    unzip zip curl git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mysqli \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

RUN composer create-project --prefer-dist laravel/laravel .

COPY . /var/www/html

RUN composer install --no-dev --optimize-autoloader

RUN chmod +x /var/www/html/wait-for-db.sh

RUN chmod -R 777 storage bootstrap/cache

CMD ["php-fpm"]

