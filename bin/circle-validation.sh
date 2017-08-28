#!/bin/sh

pass=true

printf "\nLinting:\n"

npm run lint
if [ $? -ne 0 ]; then
	printf "\033[31mLinting Failed %s\033[0m\n"
	pass=false
else
	printf "\033[32mLinting Passed %s\033[0m\n"
fi

if ! $pass; then
	printf "\n\033[41mVALIDATION FAILED:\033[0m Your HAS FAILED VALIDATION. Please fix the errors and try again.\n\n"
	exit 1
else
	printf "\n\033[42mVALIDATION SUCCEEDED\033[0m\n\n"
fi
