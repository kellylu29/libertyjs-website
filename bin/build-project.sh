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
find . -maxdepth 1 ! -name 'index.php' ! -name '.git' ! -name 'plugins' ! -name 'themes' ! -name 'upgrade' ! -name 'uploads' ! -name 'vip-config' ! -name 'languages' -exec rm -rf {} \;

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
