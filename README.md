# wp-proud-theme-starter
A starter subtheme of [wp-proud-theme](https://github.com/proudcity/wp-proud-theme) to create custom 

All bug reports, feature requests and other issues should be added to the [wp-proudcity Issue Queue](https://github.com/proudcity/wp-proudcity/issues).

There are two ways to use this plugin:
* [Basic usage](#basic-usage): Directly edit a css file. This is ideal for a couple of minor quickfixes, for example importing custom fonts or adjusting one or two colors.
* [Advanced usage](#advanced-usage): Uses SASS and Gulp to give you full control over the CSS displayed on your site.


## Basic usage

#. Rename the `wp-proud-theme-starter` to something descriptive (`my-custom-theme`), and copy it into `./wp-content/themes/`.  Enable the theme in WordPress.
#. Edit `assets/css/style.css`.


## Advanced usage
#. Edit 
#. Rename the `wp-proud-theme-starter` to something descriptive (`my-custom-theme`), and copy it into `./wp-content/themes/`.  Enable the theme in WordPress.
#. Install [nodejs](https://nodejs.org/) and [Bower](http://bower.io). Within your subtheme's directory, run `npm install && bower install`.
#. Start Gulp to build CSS files from SCSS: `gulp watch`.
#. Edit the Bootstrap variables in `assets/styles/_variables_override.scss`.  See the [ProudCity Pattern Library local variables file](https://github.com/proudcity/proudcity-patterns/blob/master/app/pattern-scss/_local-variables.scss) for a full list of available variables
#. Edit additional SCSS code in `assets/styles/`.