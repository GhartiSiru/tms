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
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

// mix.combine(
//     [
//     "resources/tms/dist/css/adminlte.min.css",
//     "resources/tms/plugins/fontawesome-free/css/all.min.css"
// ],
// "public/css/app.css"
// );

// mix.combine(
//     [
//     "resources/tms/plugins/jquery/jquery.min.js",
//     "resources/tms/plugins/bootstrap/js/bootstrap.bundle.min.js",
//     "resources/tms/dist/js/adminlte.min.js"
// ],
// "public/js/app.js"
// );
