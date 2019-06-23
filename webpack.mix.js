let mix = require('laravel-mix');

mix.setPublicPath('public_html/');
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

mix.scripts(['resources/assets/libs/jquery/dist/jquery.min.js',
            'resources/assets/libs/bootstrap/js/bootstrap.min.js',
            'https://unpkg.com/popper.js/dist/umd/popper.min.js'
        ],
        'public_html/js/script.js'
)

   .sass(/*'resources/assets/js/libs/bootstrap/css/bootstrap.min.css',*/
           'resources/assets/sass/main.sass',
       'css').
    js('resources/assets/js/app.js', 'js')
