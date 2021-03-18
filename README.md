### Laravel Moodle Client
1. cd to `moodle-client` folder
2. Copy env configs `cp .env.example .env`
3. Set `MOODLE_URL` and `MOODLE_TOKEN` values
4. Run `composer install`
5. Run `php artisan key:generate`
6. Run `php artisan serve --port=8002`
7. Access http://127.0.0.1:8002/ in the browser
