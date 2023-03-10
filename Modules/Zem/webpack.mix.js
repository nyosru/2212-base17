const dotenvExpand = require('dotenv-expand')
dotenvExpand(require('dotenv').config({ path: '../../.env' /*, debug: true*/ }))

const mix = require('laravel-mix')
    // require('laravel-mix-merge-manifest');

// mix.setPublicPath('../../public').mergeManifest();
// mix.setPublicPath('../../public');

mix
    .js(
        __dirname + '/Resources/assets/js/app.js',
        __dirname + '/Resources/assets/to-public-zem/app.js',
        // __dirname + '/../../Resources/assets/to-public-ttt/app.js',
    )
    .vue({ version: 3 })
    .css(
        __dirname + '/Resources/assets/css/app.css',
        __dirname + '/Resources/assets/to-public-zem/app.css', [require('tailwindcss')],
    )
    .sourceMaps()
    // .sass(__dirname + '/Resources/assets/sass/app.scss', 'ttt/css.css')


// mix.copy(__dirname + '/Resources/assets/img', __dirname + '/Resources/assets/to-public-ttt/img');

if (mix.inProduction()) {
    //     mix.version()
} else {
    mix.copy(__dirname + '/Resources/assets/to-public-zem/', __dirname + '/../../public/zem/')
}