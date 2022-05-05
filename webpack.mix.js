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

 mix.ts('resources/ts/app.ts', 'public/js').vue()
 .postCss('resources/css/app.css', 'public/css', [
 require('postcss-import'),
 require('tailwindcss'),
 require('autoprefixer'),
]);

mix.options({
    hmrOptions: {
        host: 'edulms.test',  // edulms.test is my local domain used for testing
        port: 8080,
    }
 });
// mix
//   .ts("resources/ts/app.ts", "public/js")
//   .vue({ version: 3 })
//   .postCss("resources/css/app.css", "public/css", [require("tailwindcss")]);
