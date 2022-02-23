const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix .js('resources/js/website/app.js', 'public/assets/js')
    .sass('resources/sass/website/app.scss', 'public/assets/css')
    // .purgeCss()
    .sourceMaps();

if (mix.inProduction()) {
    mix.version();
}
