
## Pour récupérer ce projet,
Effectuez la commande :

- git clone https://github.com/Ade-cillia/bd_laravel.git 

Faite une copie du .env.example et renommer .env, puis noubliez pas de remplire les informations suivante dans le .env:

- DB_DATABASE=
- DB_USERNAME=
- DB_PASSWORD=

effectuez les commandes :

- composer install
- php artisan migrate:fresh --seed


### Explication du fonctionnement du site:

## Consultation des personnages et des dessinateurs
Des liens dans le header permettent d'accéder aux tableaux listant les personnages et les dessinateurs enregistrés.

## Ajouter des personnages et des dessinateurs
Deux liens dans le header permettent quant à eux d'ajouter des personnages et des dessinateurs.
Vous serez redirigé vers le tableau descriptif correspondant à la catégorie dans laquelle vous avez fait un ajout.
## Modification des personnages et des dessinateurs
Un bouton 'modifier' dans chaque tableau permet de modifier les informations d'un personnage ou d'un dessinateur.
Vous serez redirigé vers le tableau descriptif correspondant à la catégorie dans laquelle vous avez fait un ajout.

## Suppression des personnages et des dessinateurs
Un bouton 'supprimer' permet d'effacer de la base de donnée un personnage ou un dessinateur.
Vous serez redirigé vers le tableau descriptif correspondant à la catégorie dans laquelle vous avez fait un ajout.
