.PHONY: test cs md all

# Dossiers par défaut
SRC=src/calculatrice
TESTS=tests/calculatriceTest

# Exécution des tests unitaires avec PHPUnit
test:
	vendor/bin/phpunit --testdox --colors=always

cs:
	vendor/bin/php-cs-fixer fix $(SRC) --dry-run --diff --allow-risky=yes

# Vérification des règles avec PHPMD
md:
	vendor/bin/phpmd $(SRC) text cleancode,codesize,controversial,design,naming,unusedcode

# Tout exécuter
all: test cs md
