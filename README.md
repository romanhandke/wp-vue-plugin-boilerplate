# vue-plugin

This is a simple Boilerplate to create a Wordpress Backend Plugin using Vue.JS

This is very much a work in progress and does not yet cover a lot of different use cases.

## Getting Started

### The PHP Side of Things
1. Install the composer dependencies. For now that is the composer autoload which helps to keep the plugin expandable.

`composer install`

The admin class in ./inc/Pages/Admin.php handles the integration into the wordpress admin area. This can be customized to fit the specific needs but note that the id of the element that vue is supposed to attach to needs to correspond the one in the ./src/main.js file.

### The Vue.JS Side of Things

1. Install the npm dependencies

`npm install`

2. Run the watch script

`npm run watch`

Note that the watch script would accept route level code-splitting for lazy loading but it's not working inside wordpress yet.

## Notes

The plugin uses the ./inc/Init.php to initialize all classes that need to be instanciated in order to be used by the plugin. So any additional class simply needs to be put into the array of services

The watch script does not implement the vue-cli-service but instead uses webpack --watch so that the bundle is created and kept up to date and still is accessible from wordpress.
