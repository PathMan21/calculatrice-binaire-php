.PHONY: test cs md all

SRC=src/
TESTS=tests/

test:
	./vendor/bin/phpunit --testdox --colors=always $(TESTS)

cs:
	./vendor/bin/php-cs-fixer fix $(SRC) --dry-run --diff --allow-risky=yes

md:
	./vendor/bin/phpmd $(SRC) text cleancode,codesize,controversial,design,naming,unusedcode

all: test cs md
