Comparateur Agricole
==============
Application Symfony2 (version 2.8) créée pour améliorer le moteur de comparaison (algorithme et mise en forme) de l'entreprise comparateur-agricole.com

## Pré-requis

Composer ==> https://getcomposer.org/  
Symfony 2.8 ==> https://symfony.com/download

## Bundles

AppBundle  
ComparateurBundle  

## Procédure d'installation  
  
1. Pour cloner le projet, saisir dans le terminal :  
`git clone https://github.com/Aylarius/comparateuragricole.git`  
  
2. Entrer dans le dossier :  
`cd comparateuragricole` 

3. Installer composer en saisissant dans le terminal :  
`composer install`  
  
4. A la fin du composer install, configurer la base de donnée  
`database_name (symfony):`  
`database_user (root):`   
`database_password (null):`
  
5. Créer votre base de données via le terminal :  
`php app/console doctrine:database:create`  
  
6. Mettre à jour votre base de données via le terminal :  
`php app/console doctrine:schema:update --force`  
  
7. Enfin mettre les droits sur le projet en saisissant dans le terminal :  
`sudo chmod -R 777 app/cache/ app/logs/`  

8. Ajouter et lier les assets (le dossier Resources/public)    
`php app/console assets:install --symlink`  

9. Vous pouvez désormais afficher le site via votre localhost de cette façon :  
`localhost/comparateuragricole/web/`   
