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
 module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
            '@editorcomponents': path.resolve('resources/js/components/editor'),
            '@editormodals': path.resolve('resources/js/components/editor/modals'),
            '@editormodules': path.resolve('resources/js/components/editor/modules'),
            '@previewcomponents': path.resolve('resources/js/components/preview'),
            '@previewmodals': path.resolve('resources/js/components/preview/modals'),
            '@previewmodules': path.resolve('resources/js/components/preview/modals')
        },
    },
};
  

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
