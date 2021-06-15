# chamcong
- 👋 Xin chào, tôi là @actcmsvn
- 🌱 Chuyên lập trình web và ứng dụng di động dựa trên nền tảng laravel & ionic
- 📫 Liên hệ với tôi theo email actcms.work@gmail.com
## Yêu cầu

- Laravel installer
- Composer
- Npm installer

## Cài đặt

```
# Clone the repository from GitHub and open the directory:
git clone https://github.com/actcmsvn/actcms-host.git

# cd into your project directory
cd chamcong

#install composer and npm packages
composer install
npm install && npm run dev

# Start prepare the environment:
cp .env.example .env // cấu hình database của bạn
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link

php artisan config:cache
php artisan cache:clear
php artisan route:clear
php artisan config:clear
php artisan view:clear
php artisan optimize

# Run your server
php artisan serve

```
php artisan migrate:fresh --seed

```
composer require laravel/jetstream
php artisan jetstream:install livewire
```

## Install Socialite Package in Laravel

```
composer require laravel/socialite
```
