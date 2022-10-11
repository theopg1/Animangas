# Animangas 
This project was made in order so that most of Anime and Manga can be found in one place. In this project we got a sample of 1000 and would be able to implement them all later on

## How to start project
To create and execute the stack, use </br>
`docker-compose up`

To execute all the database migrations, use enter the php container with </br>
`docker-compose exec php bash` </br>
then launch the following command to execute migrations </br>
`php bin/console doctrine:migrations:migrate`

To generate your own customizable empty migrations, use </br>
`php bin/console doctrine:migrations:generate`

## Useful URIs
### Animangas Project
`localhost:8000`

### Adminer 
`localhost:8090`

### Database
The database is hosted on the port 4306

## Project Tree

myproject/
├── backend
│   ├── Dockerfile
│   ├── main.py
│   └── requirements.txt
├── compose.yaml
└── frontend
    ├── Dockerfile
    └── nginx.conf
