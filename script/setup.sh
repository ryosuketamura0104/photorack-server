#!/bin/sh

docker compose up -d

docker ps

docker compose exec app chown www-data storage/ -R

docker compose exec app composer update --no-scripts

docker compose exec app composer dump-autoload

npm install

npm run watch-poll

open http://localhost:8000

echo "Done"