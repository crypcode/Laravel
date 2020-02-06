const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/style.scss', 'public/css')
    .sass('resources/scss/bootstrap/bootstrap.scss', 'public/css/bootstrap');
mix.combine([
    'public/fonts/icomoon/style.css',
    'public/css/vendor/magnific-popup.css',
    'public/css/vendor/owl.carousel.min.css',
    'public/css/vendor/owl.theme.default.min.css',
    'public/css/vendor/bootstrap-datepicker.css',
    'public/fonts/flaticon/font/flaticon.css',
    'public/css/vendor/aos.css',
], 'public/css/vendor.css');
mix.combine([
    'public/js/jquery-3.3.1.min.js',
    'public/js/jquery-migrate-3.0.1.min.js',
    'public/js/jquery-ui.js',
    'public/js/popper.min.js',
    'public/js/bootstrap.min.js',
    'public/js/owl.carousel.min',
    'public/js/popper.min.js',
    'public/js/bootstrap.min.js',
    'public/js/owl.carousel.min.js',
    'public/js/jquery.stellar.min.js',
    'public/js/jquery.countdown.min.js',
    'public/js/jquery.magnific-popup.min.js',
    'public/js/bootstrap-datepicker.min.js',
    'public/js/aos.js',
    'public/js/rangeslider.min.js',
    'public/js/main.js',

], 'public/js/app.js');


mix.browserSync('skelbimai.test');