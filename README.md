<p align="center">
  <img src="http://res.cloudinary.com/tesseract/image/upload/v1507448079/logo-tesseract-completo-preto.png" alt="Grupo Tesseract" />
  <p>Knowledge Base</p>
</p>

Criado com [October CMS](http://octobercms.com).

## Requisitos

- Docker

```
curl -fsSL https://get.docker.com/ | sh
sudo groupadd docker
sudo usermod -aG docker $USER
sudo systemctl restart docker
```

- Docker Compose

```
```

- Node

```
```

- Gulp

```
npm i -g gulp-cli
npm i
```

## Instalação


```
git clone github:grupotesseract/knowledge-base
cd knowledge-base
cp .env-example .env
docker-compose up nginx php-fpm workspace postgres pgadmin
```

Em outra aba, na mesma pasta:  

```
docker-compose exec --user=laradock workspace composer install
docker-compose exec workspace php artisan october:install
```

Em outra aba, na mesma pasta:  

```
gulp
```
