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

// 자바스크립트 컴파일
mix.js('resources/js/app.js', 'public/js');
   // .sass('resources/sass/app.scss', 'public/css');

// css 컴파일
mix.postCss('resources/css/main.css', 'public/css', [
    require('tailwindcss'),
]);
