#!/bin/sh

PATH="$PATH:/usr/local/bin"

jsfiles=$(git diff --cached --name-only --diff-filter=ACM | grep ".js*$")
cssfiles=$(git diff --cached --name-only --diff-filter=ACM | grep ".scss*$")
phpfiles=$(git diff --cached --name-only --diff-filter=ACM | grep ".php*$")

if [ "$jsfiles" = "" ] && [ "$cssfiles" = "" ] && [ "$phpfiles" = "" ]; then
	exit 0
fi

pass=true

if [ "$jsfiles" != "" ]; then
	printf "\nValidating .js:\n"

	for file in ${jsfiles}; do
		./node_modules/.bin/eslint --cache ${file}
		if [ $? -ne 0 ]; then
			printf "\033[31mEslint Failed: %s\033[0m\n" "${file}"
			pass=false
		else
			printf "\033[32mEslint Passed: %s\033[0m\n" "${file}"
		fi
	done
fi

if [ "$cssfiles" != "" ]; then
	printf "\nValidating .scss:\n"

	for file in ${cssfiles}; do
		./node_modules/.bin/stylelint ${file}
		if [ $? -ne 0 ]; then
			printf "\033[31mStylelint Failed: %s\033[0m\n" "${file}"
			pass=false
		else
			printf "\033[32mStylelint Passed: %s\033[0m\n" "${file}"
		fi
	done
fi

if [ "$phpfiles" != "" ]; then
	printf "\nValidating .php:\n"

	for file in ${phpfiles}; do
		# Check PHP files syntax
		php -lf "$file"

		if [ $? -ne 0 ]; then
			printf "\033[31mPHP syntax check failed: %s\033[0m\n" "${file}"
			pass=false
		else
			printf "\033[32mPHP syntax check passed: %s\033[0m\n" "${file}"
		fi

		# Check WordPress Coding Standards
		./vendor/bin/phpcs --standard=phpcs.xml ${file}

		if [ $? -ne 0 ]; then
			printf "\033[31mWordPress Coding Standards check failed: %s\033[0m\n" "${file}"
			pass=false
		else
			printf "\033[32mWordPress Coding Standards check passed: %s\033[0m\n" "${file}"
		fi
	done
fi

if ! $pass; then
	printf "\n\033[41mCOMMIT FAILED:\033[0m Your commit contains files that should pass validation tests but do not. Please fix the errors and try again.\n\n"
	exit 1
else
	printf "\n\033[42mCOMMIT SUCCEEDED\033[0m\n\n"
fi
