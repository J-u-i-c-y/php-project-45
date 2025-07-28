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

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

test-coverage:
	mkdir -p build
	composer exec phpunit -- --coverage-clover coverage.xml tests

# test-coverage:
# 	mkdir -p build/logs
# 	composer exec phpunit -- --coverage-clover build/logs/clover.xml tests