FROM php:7.4-cli

# Add Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Add xdebug
RUN apt-get update && \
    apt-get install -y zlib1g-dev zlib1g-dev libzip-dev unzip && \
    docker-php-ext-install zip && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug 
