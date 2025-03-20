install: 
	composer install
	
brain-games:
	./bin/brain-games welcome

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin