# Catapult
Catapult is a boilerplate plugin for organizing theme agnostic site functionality. Still very much in development.

## Description
Originally inspired by @billerickson https://github.com/billerickson/Core-Functionality It aims to keep things like post types, metaboxes, shortcodes, etc. out of the theme and easily portable. A smarter way of building custom sites that require a lot of functionality.


### Organization
The philosophy behind the organization is inspired in part by http://wppb.io.

* /admin holds all files that add functionality to the dashboard, e.g. metaboxes
* /inc holds middle ground items like post types, taxonomies
* /public hold front loaded scripts and styles that might be required by shortcodes for example
* /libraries holds 3rd party libaries, e.g. CMB2

### Intended Usage
Pull down a copy, if the CMB2 metabox library is required run <i>composer install</i> then run gulp copycmb, rename the plugin and plugin file, replace prefixes, start writing you code.

### Notes
This thing is still very much in development as I try to figure out the best way to make things as portable and reusable as possible. It will change.

