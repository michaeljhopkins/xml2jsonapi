var elixir = require('laravel-elixir');

elixir.config.sourcemaps = true;


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
        .styles([
            "bootstrap.min.css",
            "roboto.min.css",
            "material-fullpalette.css",
            "ripples.min.css",
            "dropdown.css",
            "site.css"
        ])
        .scripts([
            "jquery.js",
            "custom.js",
            "bootstrap.js",
            "material.js",
            "ripples.min.js",
            "nouislider.js",
            "custom2.js",
            "dropdown.js",
            "ga.js"
        ]);
});
