<p align="center">
  <img src="https://res.cloudinary.com/tesseract/image/upload/c_scale,h_214/v1507448079/logo-tesseract-completo-preto.png" alt="Grupo Tesseract" />
</p>

<h3 align="center">KNOWLEDGE BASE</h3>

<p align="center">
  <a href="https://github.com/ellerbrock/open-source-badges"><img src="https://badges.frapsoft.com/os/v2/open-source.png?v=103" alt="Open Source Love"></a>
</p>

## Sobre

Base de conhecimento do [Grupo Tesseract](https://grupotesseract.com.br) criado com [October CMS](http://octobercms.com) e [Otcoplus Wiki Plugin](https://octobercms.com/plugin/octoplus-wiki).

## Requisitos

- Docker

<small>

``` bash
curl -fsSL https://get.docker.com/ | sh
sudo groupadd docker
sudo usermod -aG docker $USER
sudo systemctl restart docker
```

</small>

- Docker Compose

```
COMPOSE_VERSION=`git ls-remote https://github.com/docker/compose | grep refs/tags | grep -oP "[0-9]+\.[0-9][0-9]+\.[0-9]+$" | tail -n 1`
sudo sh -c "curl -L https://github.com/docker/compose/releases/download/${COMPOSE_VERSION}/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose"
sudo chmod +x /usr/local/bin/docker-compose
```

- Node

```
curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -
sudo apt-get install -y nodejs
mkdir ~/.npm-global
npm config set prefix '~/.npm-global'
export PATH=~/.npm-global/bin:$PATH
source ~/.profile
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
