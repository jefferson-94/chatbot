//criar link virtual
php artisan storage:link

//portugues
php artisan lang:publish
composer require lucascudo/laravel-pt-br-localization --dev
php artisan vendor:publish --tag=laravel-pt-br-localization
// Altere Linha 85 do arquivo config/app.php para:
'locale' => 'pt_BR'
// Para versões >= 11.x altere a linha 8 do arquivo .env
APP_LOCALE=pt_BR

//migrate BD
php artisan migrate



Run composer update
Run php artisan key:generate
Run php artisan migrate
npm install
npm run build
Run php artisan serve