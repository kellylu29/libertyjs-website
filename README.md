# LibertyJS 2017

This is the theme for LibertyJS 2017. It is adapted from the WooConf.com 2017
theme design by Gary Murray.

## Local Dev Setup

1. Install Local by Flywheel
2. Create a site and call it libertyjs
2. Cd into the directory: ~/somewhere/libertyjs/app/public/wp-content/themes
3. Git clone this repository into that folder
4. Goto the wp-admin, button for this in Local but probably https://libertyjs.local
5. Click `Plugins` in left menu
6. Install WooCommerce and WooCommerce Box Office
7. Click on `Appearance->Themes`
8. Activate the LibertyJS theme
9. Most things should work, I will work on a DB dump that will make it all work when I have time (JB)

## Installation

1. Have node
2. `npm install`
3. Type `gulp` to build
4. Type `gulp watch` to build and then watch
5. Type `gulp imagemin` to optimize images
6. Type `gulp updatefontawesome` to update font-awesome after an npm install
7. Sit back and watch the magic
