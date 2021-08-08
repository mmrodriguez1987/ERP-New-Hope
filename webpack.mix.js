let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js/').vue()
    .sass('resources/sass/app.scss', 'public/css/')
    .copyDirectory('resources/img', 'public/images/')
    .copy([,
           './node_modules/bootstrap/dist/css/bootstrap.min.css',
           './node_modules/bootstrap/dist/css/bootstrap.min.css.map',
           'resources/css/anime.min.css',      
           'resources/css/front.min.css',
           'resources/css/lightbox.min.css',
           'resources/css/front.responsive.min.css',
           'resources/css/presets/preset1.min.css',
           'resources/css/font-awesome.min.css'
        ], 'public/css')
    .copy([
           './node_modules/jquery/dist/jquery.min.js',
           './node_modules/html5shiv/dist/html5shiv.min.js',
           './node_modules/bootstrap/dist/js/bootstrap.min.js',
           './node_modules/wowjs/dist/wow.min.js',
           './node_modules/ng-bootstrap-lightbox/dist/js/lightbox.min.js',          
           './node_modules/smoothscroll/smoothscroll.min.js',           
           'resources/js/front/mousescroll.min.js',
           'resources/js/front/lightbox.min.js',
           'resources/js/front/jquery.countTo.min.js',           
           'resources/js/front/front.min.js',
           'resources/js/front/jquery.inview.min.js',
        ], 'public/js')

    .sourceMaps();
