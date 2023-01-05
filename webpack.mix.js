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

// /* Allow multiple Laravel Mix applications*/
// require('laravel-mix-merge-manifest');
// mix.mergeManifest();
// /*----------------------------------------*/


// mix.copy('resources/img', 'public/img')
// mix.copy('resources/public', 'public')

// стартовые файлы из модуля
// mix.copy('Modules/Phpcat/Resources/to-storage-public', 'storage/app/public/')

// файлы из модуля
// mix.copy(__dirname + '/Modules/Ttt/Resources/assets/to-public-ttt/', 'public/ttt/')
mix.copy('Modules/Ttt/Resources/assets/to-public-ttt/', 'public/ttt/')
    // mix.copy('Modules/Zem/Resources/assets/to-public-zem/', 'public/zem/')
mix.copy('Modules/Zemk/Resources/assets/to-public-zemk/', 'public/zemk/')
    // /Users/phpcat/Documents/2212-base17/Modules/Ttt/Resources/assets/to-public-ttt
mix.copy('Modules/ZemkDi/Resources/assets/to-public-zemkdi/', 'public/zemkdi/')

// mix.js('resources/js/app.js', 'public/js')
//     // .js('resources/phpcat/js/app.js', 'public/phpcat2/js')
//     .vue()
//     .sass('resources/sass/app.scss', 'public/css');


// const mix2 = require('laravel-mix');
// mix2.js('resources/phpcat/js/app.js', 'public/phpcat2/js')
//     .vue()