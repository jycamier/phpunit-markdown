# phpunit-markdown

Ensemble d'exercices afin d'apprendre PhpUnit.

## Requirement

Vous aurez besoin de : 
- **git** et un compte **Github** fonctionnel (si vous n'en avez pas encore, merci de faire le nécessaire) ;
- **php 5.6** ou plus ;
- les extension de php suivantes : **dom**, **json**, **pcre**, **reflection**, **spl**, **intl**, **phar** ;
- **XDebug 2.2.1** ou plus ;
- **phpunit** : https://phpunit.de/manual/current/en/installation.html
- **composer** : https://getcomposer.org/doc/00-intro.md
- **node** (v6.9.1 LTS) : https://nodejs.org/en/ 
- **grunt-cli** (v1.2.0)

Afin de voir si votre PhpUnit est fonctionnel, vérifier que vous avez bien toutes les extensions à l'aide de la commande suivante : 

```shell
$ php -m | grep 'dom\|json\|pcre\|reflection\|spl\|intl\|phar\|xdebug\|tokenizer\|xmlwriter'
```

Il se peut que **pcre**, **reflection** ou/et **spl** ne s'affiche pas car actuellement intégrer dans le core de php.

Pour tester que PHPUnit fonctionne, merci de lancer la commande suivante : 

```shell
$ phpunit --version
```

Cette commande va vous renvoyer la version de votre phpunit installé. En cas de dépendance manquante, vous allez avoir un erreur suffisement clair pour vous aider à installer ce qui manque.

Même chose pour Composer : 
```shell
$ composer --version
```


Une fois que vous avez installé Node, installer Grunt-cli à l'aide de la commande suivante : 
```shell
npm install -g grunt-cli 
```


## Installation

Veuillez saisir la commande suivante :

```shell
$ composer install
