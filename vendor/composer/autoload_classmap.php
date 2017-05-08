<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Console\\Commands\\Inspire' => $baseDir . '/app/Console/Commands/Inspire.php',
    'App\\Console\\Kernel' => $baseDir . '/app/Console/Kernel.php',
    'App\\Events\\Event' => $baseDir . '/app/Events/Event.php',
    'App\\Exceptions\\Handler' => $baseDir . '/app/Exceptions/Handler.php',
    'App\\Http\\Controllers\\Auth\\AuthController' => $baseDir . '/app/Http/Controllers/Auth/AuthController.php',
    'App\\Http\\Controllers\\Auth\\PasswordController' => $baseDir . '/app/Http/Controllers/Auth/PasswordController.php',
    'App\\Http\\Controllers\\Controller' => $baseDir . '/app/Http/Controllers/Controller.php',
    'App\\Http\\Kernel' => $baseDir . '/app/Http/Kernel.php',
    'App\\Http\\Middleware\\Authenticate' => $baseDir . '/app/Http/Middleware/Authenticate.php',
    'App\\Http\\Middleware\\EncryptCookies' => $baseDir . '/app/Http/Middleware/EncryptCookies.php',
    'App\\Http\\Middleware\\RedirectIfAuthenticated' => $baseDir . '/app/Http/Middleware/RedirectIfAuthenticated.php',
    'App\\Http\\Middleware\\VerifyCsrfToken' => $baseDir . '/app/Http/Middleware/VerifyCsrfToken.php',
    'App\\Http\\Requests\\Request' => $baseDir . '/app/Http/Requests/Request.php',
    'App\\Jobs\\Job' => $baseDir . '/app/Jobs/Job.php',
    'App\\Providers\\AppServiceProvider' => $baseDir . '/app/Providers/AppServiceProvider.php',
    'App\\Providers\\AuthServiceProvider' => $baseDir . '/app/Providers/AuthServiceProvider.php',
    'App\\Providers\\EventServiceProvider' => $baseDir . '/app/Providers/EventServiceProvider.php',
    'App\\Providers\\RouteServiceProvider' => $baseDir . '/app/Providers/RouteServiceProvider.php',
    'App\\User' => $baseDir . '/app/User.php',
    'CreatePasswordResetsTable' => $baseDir . '/database/migrations/2014_10_12_100000_create_password_resets_table.php',
    'CreateUsersTable' => $baseDir . '/database/migrations/2014_10_12_000000_create_users_table.php',
    'DatabaseSeeder' => $baseDir . '/database/seeds/DatabaseSeeder.php',
    'TestCase' => $baseDir . '/tests/TestCase.php',
);