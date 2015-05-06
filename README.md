# Catapult
Catapult is a boilerplate plugin for organizing theme agnostic site functionality.

## Description
Originally inspired by @billerickson https://github.com/billerickson/Core-Functionality It aims to keep things like post types, metaboxes, shortcodes, etc. out of the theme and easily portable. A smarter way of building custom sites that require a lot of functionality.

### What's Included
Nothing much at this point just a few commonly used base files that leave it pretty open for modification.

It does include the fantastic CMB2 library because I use it often. Currently the CMB2 library is included directly as a git submodule because I ran into some trouble using a functionality plugin alongside the CMB2 plugin but I'm still looking at ways to do this differently.

### Organization
The philosophy behind the organization is inspired in part by the plugin boilerplate project.

* /admin holds all files that add functionality to the dashboard, e.g. metaboxes
* /inc holds middle ground items like post types, taxonomies
* /public hold front loaded scripts and styles that might be required by shortcodes for example
* /vendor holds submodules or 3rd part libraries, I don't see this growing much

### Usage
Clone it, rename it (main directory and main plugin file), Delete the files you don't need. Then search and replace all instances of plugin_name and anywhere else you feel names or prefixes should be updated. I like to use clientname-core for the main plugin file.

