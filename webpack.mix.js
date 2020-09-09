const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.js("resources/js/app.js", "public/js")
    .js("vendor/aw-studio/docdress/assets/js/search.js", "public/docdress/js")
    .sass(
        "vendor/aw-studio/docdress/assets/sass/app.scss",
        "public/docdress/css"
    )
    .sass("resources/sass/app.scss", "public/css")
    .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.config.js")]
    });

mix.browserSync({
    notify: false,
    proxy: "litstack.io.aw"
});
