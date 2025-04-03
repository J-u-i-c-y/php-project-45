install:
	composer install
	
brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime

validate:
	composer validate

test-coverage:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin