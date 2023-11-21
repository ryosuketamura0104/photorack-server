#!/bin/sh

docker compose up -d

docker ps

docker compose exec app chown www-data storage/ -R

open http://localhost:8000

echo "Done"