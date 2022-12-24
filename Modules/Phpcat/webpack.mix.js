const dotenvExpand = require('dotenv-expand')
dotenvExpand(require('dotenv').config({ path: '../../.env' /*, debug: true*/ }))

const mix = require('laravel-mix')
    // require('laravel-mix-merge-manifest');

// mix.setPublicPath('../../public').mergeManifest();
mix.setPublicPath('../../public')

mix
// .js(__dirname + '/Resources/assets/js/app.js', 'js3/phpcat.js')
    .js(__dirname + '/Resources/assets/js-phpcat/app.js', '/phpcat/app.js')
    .vue()
    .version()

// .js(__dirname + '/Resources/assets/js/app.js', '/phpcat123/js.js')
mix.sass(__dirname + '/Resources/assets/sass/app.scss', '/phpcat/css.css')

if (mix.inProduction()) {
    mix.version()
}