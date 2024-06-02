#!/bin/bash

echo "Running Laravel Build"

# Install composer dependencies
composer install --optimize-autoloader --no-dev

# Install npm dependencies
npm install

# Run Vite build
npm run build

# Run artisan commands
php artisan key:generate
php artisan config:cache
php artisan route:cache
php artisan view:cache
