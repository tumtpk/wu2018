# WU2018

Automated testing with PHPUnit and CircleCI 

## Prerequisites
- Github account
- Git Bash https://git-scm.com/downloads
- Docker https://docs.docker.com/install/
- Editor, one of 
  - VSCode https://code.visualstudio.com/ or 
  - Sublime https://www.sublimetext.com/
  
  Read this https://phpunit.de/getting-started-with-phpunit.html

## Running project
```bash
docker-compose up --build
```
Access http://localhost:8080 to see example page

## Get into the webapp container
```bash
docker exec -it wu2018_webapp_1 bash
```

## Troubleshooting Docker for Windows
If cannot download the image due to "client timeout" try

https://github.com/docker/for-win/issues/611
