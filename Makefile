build:
	mkdir -p dist
	(zip -r - ./twentytwentythree-starter) > dist/twentytwentythree-starter.zip
	(zip -r - ./twentytwentytwo-starter) > dist/twentytwentytwo-starter.zip
