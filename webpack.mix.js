const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/flatpickr.js", "public/js")
    .js("resources/js/alpine.js", "public/js")
    .js("resources/js/virtual-select-init.js", "public/js")
    .js("resources/js/turbo.js", "public/js");

mix.sass("resources/sass/auth.scss", "public/css")
    .sass("resources/sass/app.scss", "public/css")
    .sass("resources/sass/dependencies.scss", "public/css")
    .sass("resources/sass/fontawesome.scss", "public/css");

mix.copy(
    "node_modules/@fortawesome/fontawesome-free/webfonts",
    "public/webfonts"
);
