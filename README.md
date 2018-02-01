# wu2018

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