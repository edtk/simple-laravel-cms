### Installation guide

```bash
git clone https://github.com/edtk/simple-laravel-cms.git
cd simple-laravel-cms
cp .env.sqlite .env
cp db.sqlite database/database.sqlite
composer install
php artisan key:generate
php artisan migrate
# Optional for seeds
# php artisan db:seed

php artisan serve
```