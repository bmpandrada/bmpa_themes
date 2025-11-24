bmpa_themes — WordPress custom theme
A lightweight, customizable WordPress theme built with:

Sass (SCSS) for styles
jQuery for frontend interactions
PHP for WordPress templates and backend logic
Features
SCSS-based architecture (variables, partials, mixins)
Minimal JS using jQuery (no heavy frameworks)
WP-friendly: enqueue scripts/styles, follow template hierarchy
Easy dev/build workflow (compile SCSS, bundle/minify assets)
Quick install
Copy the theme folder to wp-content/themes/bmpa_themes (or zip & upload).
Activate the theme from WordPress Admin → Appearance → Themes.
Development
Requirements:

Node.js & npm (or yarn)
Dart Sass (or use npm package sass)
Optional: Browsersync / Gulp / Webpack for live reload & bundling
Suggested folder layout:

src/
scss/ (source SCSS files)
js/ (source JS files)
assets/
css/ (compiled CSS)
js/ (compiled JS)
template-parts/
functions.php
style.css (theme header)
index.php, header.php, footer.php, etc.
Example npm scripts (package.json):

"dev": "sass --watch src/scss:assets/css"
"build:css": "sass src/scss:assets/css --no-source-map --style=compressed"
Add bundler steps if you use webpack/rollup for JS.
Compiling SCSS
Local dev:

npm install
npm run dev Build for production:
npm run build:css
Run your JS bundler and copy outputs to assets/js
Enqueue assets (example functions.php)
Use WP enqueue functions and rely on WP's built-in jQuery:

PHP
function bmpa_enqueue_assets() {
  wp_enqueue_style( 'bmpa-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );
  wp_enqueue_script( 'bmpa-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'bmpa_enqueue_assets' );
Using jQuery safely (noConflict):

js
jQuery(document).ready(function($){
  // $ is safe to use here
  $('.menu-toggle').on('click', function(){ /* ... */ });
});
Best practices / tips
Keep SCSS modular: base/, components/, layout/, utilities/.
Prefix CSS class names to avoid collisions (e.g., .bmpa-).
Sanitize and escape all output in PHP (esc_html, esc_attr, wp_kses).
Use WP functions for URLs and translations (get_template_directory_uri, __()).
Version assets for cache-busting during deploys.
Template suggestions
Include at minimum:

style.css (theme header comment)
index.php
functions.php
header.php / footer.php
single.php / page.php
404.php
template-parts/ for reusable blocks
Contributing
Open an issue or PR with changes.
Follow coding standards: HTML5 mark-up, WP PHP best practices, SCSS style guide.
License & author
Author: bmpandrada
License: choose a license (MIT / GPL-2.0-or-later recommended for WordPress themes)

