FROM php:cli

WORKDIR /app

COPY . .

CMD [ "php", "-S", "0.0.0.0:90", "-t", "public" ]
