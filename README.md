# Centiva Test - API Laravel

Objectif : Réaliser une petite application Laravel permettant l'accès à quatre endpoints GET, un endpoint POST et un endpoint DELETE, qui pourront être testés depuis Postman.

[Voir les instructions complètes](documentation/Instructions_test.pdf).

## A propos

Afin de faciliter la mise en place du projet, il n'y aura qu'une seule branche `master` qui contiendra le code final.
De plus, il n'y aura pas de PR, les commits seront directement poussés sur la branche `master`.

## Installation

* Cloner le projet
* Créer un fichier `.env` à partir du fichier `.env.example`
* Installer les dépendances avec `composer install`
* Créer la base de données avec `php artisan migrate`
    * refresh avec fixtures `php artisan migrate:fresh --seed`
* Lancer le serveur avec `php artisan serve`

## Mon apprentissage et mon approche

Je suis développeur web et j'utilise Symfony depuis sa version 2.3. J'ai donc décidé de relever le défi de ce test avec Laravel pour découvrir ce framework.

J'ai commencé par écouter les vidéos de la formation [Laracast section 4](https://laracasts.com/series/laravel-8-from-scratch/episodes/17) pour comprendre le
fonctionnement de la BDD et commencer sa conception. 

J'ai ensuite lu une ressource sur la création d'API avec Laravel : [laravel.sillo.org](https://laravel.sillo.org/cours-laravel-10-les-donnees-les-ressources-dapi-2/).
afin de m'aider à créer les endpoints.
Génération de la "base" avec `artisan make:controller Api/UserController --api`

Pour la partie : [SoftDelete](https://laravel.com/docs/10.x/eloquent#soft-deleting).


## Améliorations possibles

* Ajouter des tests
* Recherche par slug au lieu des ID sur les endpoints
