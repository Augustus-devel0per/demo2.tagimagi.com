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

// mix.js('resources/js/app.js', 'js')
//     .sass('resources/sass/app.scss', 'css');

mix.styles([
    'website-template/css/animate.css',
    'website-template/css/bootstrap.min.css',
    'website-template/revolution/css/settings.css',
    'website-template/revolution/css/navigation.css',
    'website-template/css/ionicons.min.css',
    'website-template/lib/slick/slick.css',
    'website-template/lib/slick/slick-theme.css',
    'website-template/css/font-awesome.min.css',
    'website-template/css/dark-color.css',
    'website-template/css/style.css',
    'website-template/css/responsive.css'
    ], 'bundle/igloo.css');

mix.scripts([
    'website-template/js/jquery.min.js',
    'website-template/js/popper.js',
    'website-template/js/bootstrap.min.js',
    'website-template/lib/slick/slick.js',
    'website-template/js/html5lightbox.js',
    'website-template/js/script.js'
], 'bundle/igloo.js'); 
