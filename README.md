# LP-apoio
Landing page referente à campanha de apoio desenvolvida pela Mirum

### Pré-requisitos
Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [Node.js](https://nodejs.org/en/), [Gulp.js](https://gulpjs.com/), [Docker](https://www.docker.com)[Docker-Compose](https://docs.docker.com/compose/install/). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

### Rodando o projeto
```bash
# Inicialize o docker e rode o comando
$ docker-compose up --build

# Após rodar o container acesse - <http://localhost>

### Realizando ajustes de css/js
# Ir ate a pasta Azmina
$ cd src/wp-content/themes/Azmina

# Instale as dependências
$ npm install

# Acesse o arquivo main.scss contido dentro da pasta:
$ cd src/wp-content/themes/Azminacss/scss/

### Rode o gulp toda vez que fizer alguma alteração no arquivo main.scss com o comando estando na raiz do tema:
$ gulp
```
### Acessando o painel admin
Para acessar a o admin do wordpress acesse:
http://localhost/wp-admin

### Acessando o phpmyadmin
Para acessar o phpmyadmin acesse:
http://localhost:7171


A senha do ambiente local foi enviada via email

