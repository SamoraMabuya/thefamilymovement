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

    mix.js("resources/js/custom.js", "public/js")
        .css("resources/css/style.css", "public/css")
                .css("resources/css/thankyou.css", "public/css");


    mix.browserSync("http://127.0.0.1:8000");