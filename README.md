<p align="center">
  <img src="http://res.cloudinary.com/tesseract/image/upload/v1507448079/logo-tesseract-completo-preto.png" alt="Grupo Tesseract" />
  <p>Knowledge Base</p>
</p>

Criado com [October CMS](http://octobercms.com).

## Requisitos

- Docker

``` bash
curl -fsSL https://get.docker.com/ | sh
sudo groupadd docker
sudo usermod -aG docker $USER
sudo systemctl restart docker
```

- Docker Compose

```
COMPOSE_VERSION=`git ls-remote https://github.com/docker/compose | grep refs/tags | grep -oP "[0-9]+\.[0-9][0-9]+\.[0-9]+$" | tail -n 1`
sudo sh -c "curl -L https://github.com/docker/compose/releases/download/${COMPOSE_VERSION}/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose"
sudo chmod +x /usr/local/bin/docker-compose
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
