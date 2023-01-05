const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env' /*, debug: true*/ }));

const mix = require('laravel-mix');
// require('laravel-mix-merge-manifest');

// mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/app.js',
        __dirname + '/Resources/assets/to-public-zemkdi/app.js')
    .css(__dirname + '/Resources/assets/app.css',
        __dirname + '/Resources/assets/to-public-zemkdi/app.css', [require('tailwindcss')])
    .sourceMaps();

if (mix.inProduction()) {
    // mix.version();
} else {
    mix.copy(__dirname + '/Resources/assets/to-public-zemkdi/', __dirname + '/../../public/zemkdi/')
}