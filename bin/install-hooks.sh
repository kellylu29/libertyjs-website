#!/bin/sh

if [ ! -e .git/hooks/pre-commit ]; then
	ln -s ../../bin/pre-commit.sh .git/hooks/pre-commit;
fi
