let mix = require('laravel-mix');

mix.js('src/app.js', 'dist/app.js');

mix.js('src/event.js', 'dist/event.js');

mix.sass('src/app.scss', 'style.css');