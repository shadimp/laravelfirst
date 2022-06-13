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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]).styles(['resources/css/mystyle.css'], 'public/css/mystyle.css')

//     .version();

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]).scripts(['resources/js/myjs.js','resources/js/myjs2.js'], 'public/js/mymix.js').
    styles(['resources/css/mystyle.css'], 'public/css/mystyle.css')

    ;
