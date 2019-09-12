-->Framework: LARAVEL 5.7
-->depot: https://github.com/jospintedjou/ars-group.git

Procédure de récuéparation

-->Colner le projet sur github
-->taper la commande: composer install
-->dupliquer le fichier .env-example et le renommer en ".env"
->Configuer la base donnée 
->Créer une base de donnée du même nom que celui du .env
-->Taper la commande: php artisan migrate
-->Taper la commande: php artisan db:seed
-->Accéder à l'application en entrant url dans le navigateur


-->Note: un compte avec les paramètres (admin@gmail.com/123456) est créé par défaut pour les test.