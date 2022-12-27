module.exports = {
    content: ['./resource/**/*.{html,vue,js}', './node_modules/tw-elements/dist/js/**/*.js'],
    // content: ['./src/**/*.{html,vue,js}', './node_modules/tw-elements/dist/js/**/*.js'],
    theme: {
        extend: {},
    },
    plugins: [
        require('tw-elements/dist/plugin')
    ],
}