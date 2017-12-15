var elixir = require('laravel-elixir');
// require('laravel-elixir-vue-2'); // recommended for vue 2
elixir(function(mix) {
    mix.sass('custom.sass');
    mix.coffee('gal.coffee');
});
