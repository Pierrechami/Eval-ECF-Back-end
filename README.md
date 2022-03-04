#Projet TRT-Conseil 
***
##Description
***
Dépôt du projet TRT-Conseil

Les documents annexes sont disponible dans le dossier ANNEXES :
 - Manuel d'utilisation 
 - Documentation technique 

## Récupération du projte 
***
Utiliser GIT Clone pour récupérer le dépot

```
git clone https://github.com/Pierrechami/Eval-ECF-Back-end
```

## Installation
***
```
# Déplacement dans le dossier 

cd TRT-Conseil

# Installation des dependance

composer install

# Création de de la base de données 

php bin/console doctrine:database:create

# Création des tables en base de données (migrations)

php bin/console doctrine:migrations:migrate
 ```

##Utilisation
***
- Si vous avez installé **Symfony**

```
symfony server:start
```

- Si vous utilisez Composer, il faut installer le Web Server Bundle :

```
composer require symfony/web-server-bundle --dev
php bin/console server:start
```


