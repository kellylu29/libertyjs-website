#!/bin/sh

# Exit if any subcommand fails.
set -e

if [ -z "$1" ]
then
    echo "Usage: ./bin/build-project.sh <deploy-branch-name>"
    exit 1
fi

# Variables
ORIGIN_URL=`git config --get remote.origin.url`

echo "Started deploying"

# Checkout deploy branch.
if [ `git branch | grep $1` ]
then
  git branch -D $1
fi
git checkout -b $1

# Build site.
npm install --production
npm run build

# Delete and move files.
find . -maxdepth 1 ! -name '.git' ! -name 'fonts' ! -name 'img' ! -name 'page-templates' ! -name 'woocommerce' ! -name 'woocommerce-box-office' ! -name 'favicon-16x16.png' ! -name 'favicon-32x32.png' ! -name 'favicon-96x96.png' ! -name 'favicon.icog' ! -name 'footer.php' ! -name 'functions.php' ! -name 'header.php' ! -name 'index.js' ! -name 'index.php' ! -name 'style.css' ! -name 'screenshot.png' -exec rm -rf {} \;

# Push to deploy.
git config user.name "$USER_NAME"
git config user.email "$USER_EMAIL"

git add -fA
git commit --allow-empty -m "Build: $1 [ci skip]"
git push -f $ORIGIN_URL $1

# Move back to previous branch.
git checkout -

echo "Deployed Successfully!"

exit 0
