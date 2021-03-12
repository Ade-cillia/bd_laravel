
## Pour récupérer ce projet:
Effectuez la commande :
```bash
- git clone https://github.com/Ade-cillia/bd_laravel.git 
```
Faite une copie du .env.example et renommer .env, puis noubliez pas de remplire les informations suivante dans le .env:
```bash
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
effectuez les commandes :
```bash
composer install
php artisan migrate:fresh --seed
```



### Explication du fonctionnement du site:

ce site met en pratique 2 CRUD complet par raport à des personnages de Bandes Dessinées relier à leur dessinateur. 


