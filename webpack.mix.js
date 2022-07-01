let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js/').vue()
    .sass('resources/sass/app.scss', 'public/css/')
    .copyDirectory('resources/img', 'public/images/')
    .copyDirectory('resources/fonts', 'public/fonts/')
    .copy('resources/css/bootstrap.css', 'public/css/')
    .copy('resources/css/fl-bigmug-line.css', 'public/css/')
    .copy('resources/css/mdi.css', 'public/css/')
    .copy('resources/css/novi.css', 'public/css/')
    .copy('resources/css/style-alt-colors.css', 'public/css/')
    .copy('resources/css/style.css', 'public/css/')
    .copy('resources/css/style.css.map', 'public/css/')
    .copy('resources/js/core.min.js', 'public/js/')
    .copy('resources/js/html5shiv.min.js', 'public/js/')
    .copy('resources/js/pointer-events.min.js', 'public/js/')
    .copy('resources/js/script.js', 'public/js/')
    .sourceMaps();