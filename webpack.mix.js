let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js/').vue()
    .sass('resources/sass/app.scss', 'public/css/')
    .sass('resources/sass/brave/custom/style.scss','public/css/')
    .copyDirectory('resources/img', 'public/images/')
    .copyDirectory('resources/fonts', 'public/fonts/')
    .copyDirectory('resources/js/front','public/js/')
    .copy('resources/css/bootstrap.css', 'public/css/')
    .copy('resources/css/fl-bigmug-line.css', 'public/css/')
    .copy('resources/css/mdi.css', 'public/css/')
    .copy('resources/css/novi.css', 'public/css/')
    .options({
        processCssUrls: false
    })
    .sourceMaps();
    