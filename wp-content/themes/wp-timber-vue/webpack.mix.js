const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')

mix.js('assets/scripts/app.js', 'dist/js')
  .sass('assets/sass/app.scss', 'dist/css')
  .options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.config.js')],
  })
  .setPublicPath('dist')
  .version()
  .browserSync(); // Hot reloading