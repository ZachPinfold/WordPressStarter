## A WordPress starter theme

# Includes:

- SASS
- Live refresh
- Webpack config

# Local Setup:

- Download Local by Flywheel
- Start up a new WordPress site via the Local control panel
- Place this folder in the local themes folder: local files / wp-content / themes
- Boot up the Local website
- Login to the CMS and set this theme

# Setup:

- NPM install / YARN install
- Install the VSCode extention - Watch Sass
- Rename this repo as your theme name
- Rename the css Theme name in root/style.css (you may need to reassign the theme in the CMS after this)
- In the webpack config, replace the ReplaceMe with your own repo name
- In the functions.php file, replace replace-me-with-url with your Local by flywheel url (eg: mywebsite.local)

# Running locally

- npm/yarn run devFast
- Open the website via Local by Flywheel
- Reload the page
- Run Watch Sass (in bottom toolbar)
- Live refresh will now work when files are changed
