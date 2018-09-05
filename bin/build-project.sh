#!/bin/sh

# Exit if any subcommand fails.
set -e

# Variables
ORIGIN_URL=`git config --get remote.origin.url`

echo "Started deploying"

# Checkout deploy branch.
if [ 'git branch | grep build-production' ]
then
  git branch -D 'build-production'
fi
git checkout -b 'build-production'

# Build site.
npm run build

# Delete and move files.
find . -maxdepth 1 ! -name '.git' ! -name 'fonts' ! -name 'img' ! -name 'includes' ! -name 'page-templates' ! -name 'woocommerce' ! -name 'woocommerce-box-office' ! -name 'archive-speakers.php' ! -name 'favicon-16x16.png' ! -name 'favicon-32x32.png' ! -name 'favicon-96x96.png' ! -name 'favicon.icog' ! -name 'footer.php' ! -name 'functions.php' ! -name 'header.php' ! -name 'index.js' ! -name 'index.php' ! -name 'style.css' ! -name 'screenshot.png' -exec rm -rf {} \;

# Push to deploy.
git config user.name "$USER_NAME"
git config user.email "$USER_EMAIL"

git add -fA
git commit --allow-empty -m "Build: build-production [ci skip]"
git push -f $ORIGIN_URL 'build-production'

# Move back to previous branch.
git checkout -

echo "Deployed Successfully!"

exit 0
