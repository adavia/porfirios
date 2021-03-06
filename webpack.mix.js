let mix = require('laravel-mix');

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    'popper.js/dist/umd/popper.js': ['Popper']
})

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

 mix.js([
     'node_modules/jquery/dist/jquery.slim.min.js',
     'node_modules/popper.js/dist/umd/popper.min.js',
     'node_modules/bootstrap/dist/js/bootstrap.min.js',
     'resources/assets/js/app.js'], 'public/js/app.js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .version();
