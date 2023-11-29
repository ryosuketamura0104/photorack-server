#!/bin/sh

docker compose up -d --build

docker ps

docker compose exec app composer update --no-scripts

docker compose exec app php artisan migrate

docker compose exec app npm run watch-poll

open http://localhost:8000

echo "Done"