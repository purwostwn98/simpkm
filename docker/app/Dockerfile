# Use the official PHP image as a base image
FROM php:8.1-fpm

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    unzip \
    git \
    zsh \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install zip \
    && docker-php-ext-install pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy the current directory contents into the container
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install CodeIgniter dependencies
RUN composer install

# Set permissions for writable directories
RUN chown -R www-data:www-data /var/www/html/writable \
    && chmod -R 775 /var/www/html/writable

# Configure Git safe directory
RUN git config --global --add safe.directory /var/www/html

# Set Zsh as the default shell for www-data user
RUN chsh -s /bin/zsh www-data

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
