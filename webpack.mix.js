const mix = require
(
   'laravel-mix'
);

mix.js
(
   'resources/js/app.js',
   'public/assets/js'
)

.sass
(
   'resources/sass/app.scss',
   'public/assets/css'
);

mix.browserSync
(
   'http://laravel-contact.test/'
)
