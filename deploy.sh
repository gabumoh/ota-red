#!/bin/sh

# update source code
#git pull
eval `ssh-agent -s`
ssh-agent $(ssh-add /var/www/ota-red/storage/.key/id_rsa; git pull origin master)

# update PHP dependencies
export COMPOSER_HOME='/tmp/composer'
composer install --no-interaction
	# --no-interaction	Do not ask any interactive question
	# --no-dev		Disables installation of require-dev packages.
	# --prefer-dist		Forces installation from package dist even for dev versions.

# update database
php artisan migrate --force
	# --force		Required to run when in production.
# seed database
php artisan db:seed
