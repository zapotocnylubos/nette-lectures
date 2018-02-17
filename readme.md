docker build -t nette-routing .
docker run -p 8080:80 --name NetteRouting -v $(pwd):/var/www/html nette-routing
docker restart -P --name NetteRouting -v $(pwd):/var/www/html nette-routing