# Usa uma imagem PHP-FPM como base
FROM php:8.2-fpm-alpine

# Instala as dependencias do sistema
RUN apk update && \
    apk add --no-cache \
    git \
    unzip \
    libxml2-dev \
    oniguruma-dev \
    mysql-client \
    mysql-dev \
    linux-headers

# Instala as extensoes do PHP
RUN docker-php-ext-install  \
    pdo \
    pdo_mysql \
    exif \
    mbstring \
    bcmath \
    opcache

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Define o diretorio de trabalho
WORKDIR /var/www/html

# Expor a porta do PHP-FPM
EXPOSE 9000

# Comando padrao para iniciar o PHP-FPM
CMD ["php-fpm"]
