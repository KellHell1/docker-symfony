#!/bin/bash

docker compose up -d
docker compose exec php composer update
docker compose exec php composer install
docker compose exec php bin/console lexik:jwt:generate-keypair --skip-if-exists