
let mix = require('laravel-mix');
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: 'localhost',
        files: [
            'app//*',
            'public//',
            'resources/views/**/',
            'resources/lang//*',
            'routes//*'
        ],
    });
