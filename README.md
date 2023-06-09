After collating the project

```composer install```

An image was created in the docker-compose.yml file. Check the ports to see if there are any conflicts with those on your machine. Naturally it will run on port 8008

```docker-compose up```

Run the migrates

```docker-compose exec web php artisan migrate```

Test the requests in postman
