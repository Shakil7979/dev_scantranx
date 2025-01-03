# Set base image
FROM php:8.1-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring bcmath json curl \
    && apt-get clean

# Copy the current directory contents into the container
COPY . /var/www

# Set working directory
WORKDIR /var/www

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port 9000
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
