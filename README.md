Testing Push
This project is using Jetstream as base, and Filamentphp as admin panel

## Installation

1. Run `composer install`
2. Run `npm install`
3. Run `php artisan cache:clear`
4. Run `php artisan livewire:discover`
5. Create your own database
6. Make `.env` from `.env.example` and fill your database information
7. Fill `FILESYSTEM_DISK` variable with `local` or `s3Public` (Fill your S3 information as `AWS` variables inside `.env` if it's using S3)
8. Fill your mailer information inside `.env`, example
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=yoursmtpport
MAIL_USERNAME=youremail@gmail.com
MAIL_PASSWORD=youremailappcode
MAIL_ENCRYPTION=ssl
MAIL_FROM_NAME=Your App Name
```
10. Run php artisan storage:link
11. Run `php artisan migrate:fresh --seed`
12. Run `npm run build`
13. Log into Admin Panel in `/admin` using Email `admin@admin.com` and Password `password`
