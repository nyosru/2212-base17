const dotenvExpand = require('dotenv-expand')
dotenvExpand(require('dotenv').config({ path: '../../.env' /*, debug: true*/ }))

const mix = require('laravel-mix')
    // require('laravel-mix-merge-manifest');

// mix.setPublicPath('../../public').mergeManifest();
mix.setPublicPath('../../public')

mix
// .js(__dirname + '/Resources/assets/js/app.js', 'js3/phpcat.js')
    .js(__dirname + '/Resources/assets/js-bill/app.js', '/bill/app.js')
    .vue()

// .js(__dirname + '/Resources/assets/js/app.js', '/phpcat123/js.js')
// mix.sass(__dirname + '/Resources/assets/sass/app.scss', '/bill/css.css')
.sass(__dirname + '/Resources/assets/sass/app.scss', '/bill/css.css')

if (mix.inProduction()) {
    mix.version()
}


// mix.webpackConfig({
//     resolve: {
//         modules: [
//             path.resolve(__dirname, 'vendor/laravel/spark/resources/assets/js')
//         ]
//     }
// });