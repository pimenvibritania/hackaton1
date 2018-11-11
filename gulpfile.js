elixir(function(mix) {
   mix
   .sass('app.scss')
   .styles([
       'yourapp.css'
   ])
   .scripts([
       'yourapp.js'
   ])
   .version(["public/css/all.css", "public/js/all.js"]);
});