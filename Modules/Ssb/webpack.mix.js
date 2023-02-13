const dotenvExpand = require('dotenv-expand')
dotenvExpand(require('dotenv').config({ path: '../../.env' /* , debug: true */ }))

const mix = require('laravel-mix')
    // require('laravel-mix-merge-manifest')

// mix.setPublicPath('../../public').mergeManifest()

mix
// .js(__dirname + '/Resources/assets/js/app.js', 'js3/phpcat.js')
    .js(
        __dirname + '/Resources/assets/js/app.js',
        __dirname + '/Resources/to-public-ssb/app.js',
        // '/phpcat/app.js'
    )
    .vue()
    // .version()

mix.sass(
    __dirname + '/Resources/assets/sass/app.scss',
    // '/phpcat/css.css'
    __dirname + '/Resources/to-public-ssb/css.css',
)

mix.copy(
    __dirname + '/Resources/to-public-ssb/',
    __dirname + '/../../public/ssb/',
)
mix.copy(
    __dirname + '/Resources/to-public-ssb/img/',
    __dirname + '/../../public/ssb/img/',
)


// mix.js(__dirname + '/Resources/assets/js/app.js', 'js/ssb.js')
//     .sass( __dirname + '/Resources/assets/sass/app.scss', 'css/ssb.css');

// if (mix.inProduction()) {
//     mix.version();
// }