FROM php:8.2-cli


RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql

WORKDIR /usr/src/myapp
COPY . .

CMD ["php", "-S", "0.0.0.0:8000"]
