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
mix.copyDirectory('resources/Labs/fonts','public/fonts');
mix.copyDirectory('resources/Labs/img','public/img');
mix.copyDirectory('resources/Labs/js', 'resources/js');
mix.copyDirectory('resources/Labs/css','resources/css');http://127.0.0.1:8000/
// Script Assets
mix.scripts(
   [
       "resources/js/jquery-2.1.4.min.js",
       "resources/js/bootstrap.min.js",
       "resources/js/magnific-popup.min.js",
       "resources/js/owl.carousel.min.js",
       "resources/js/circle-progress.min.js",
       "resources/js/map.js",
       "resources/js/main.js",
       "node_modules/bootstrap-select/dist/js/bootstrap-select.js"
   ],
   "public/js/all.js"
);
//Style Assets
mix.sass('resources/sass/app.scss','public/css/fonts.css')
mix.styles(
   [
       "resources/css/bootstrap.min.css",
       "resources/css/font-awesome.min.css",
       "resources/css/flaticon.css",
       "resources/css/magnific-popup.css",
       "resources/css/owl.carousel.css",
       "resources/css/style.css",
       "node_modules/bootstrap-select/dist/css/bootstrap-select.css"
   ],
   "public/css/app.css"
);