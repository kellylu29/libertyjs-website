#!/bin/sh

# Exit if any subcommand fails.
set -e

# Variables
ORIGIN_URL=`git config --get remote.origin.url`

echo "Started deploying"

# Checkout deploy branch.
if [ 'git branch | grep build-production' ]
then
  git branch -D build-production
fi
git checkout -b build-production



exit 0
