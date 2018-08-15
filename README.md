# mongodb
A mongo db enabled environment with php and nginx

To start the project you need to have docker, composer and git installed on your machine first

1. Start Docker 
2. Clone the project to your machine anywhere you like (ex: your desktop) `git clone git@github.com:engmohammedyehia/mongodb.git`
3. Open your terminal and point to the project directory 
4. Start the docker containers `docker-compose up -d`
5. Download dependencies using composer `docker exec -w /var/www/html -it web_container composer install`
6. Open the url https://localhost

Note: you don't need to build as the docker-compose.yml contains only images
