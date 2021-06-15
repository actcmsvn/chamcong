const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);
mix.copyDirectory('resources/copy_js', 'public/js');    
mix.copyDirectory('resources/css/vendor', 'public/vendor');
mix.copyDirectory('resources/assets_js', 'public/assets/js');
mix.copyDirectory('resources/assets_css', 'public/assets/css');
mix.copyDirectory('resources/assets_fonts', 'public/assets/fonts');
mix.sass('resources/scss/style.scss', 'public/assets/css');