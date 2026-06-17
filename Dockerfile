FROM php:8.2-cli

RUN apt-get update && apt-get install -y git unzip curl libzip-dev zip nodejs npm
RUN docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN npm install
RUN npm run build

RUN mkdir -p storage/framework/cache
RUN mkdir -p storage/framework/sessions
RUN mkdir -p storage/framework/views

RUN chmod -R 777 storage bootstrap/cache

EXPOSE 10000

CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
