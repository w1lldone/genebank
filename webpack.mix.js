let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.disableSuccessNotifications();

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/admin.js', 'public/js')
    .styles([
        'public/css/style.css',
        'public/css/responsive.css',
    ], 'public/css/app.css')
   .sass('resources/assets/sass/admin.scss', 'public/css');

if (mix.inProduction()) {
   mix.version();
}
