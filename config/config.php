<?php
/**
 * Fichier de configuration générale de l'application
 * 
 * 1. Définition des constantes
 * 2. Définition des variables d'environnement d'exécution
 * 3. Définition des variables de base de données
 * 4. Définition des variables de routage
 * 5. Définition des expressions régulères
 */

 /**
  * 1. Définition des constantes
  */

  // Définition du titre du site
  define('WEBSITE_TITLE', "Webpizza, les meilleures pizza du WEB !");

  // Définir le chemin de répertoire "utils"
  define('UTILS_PATH', "../utils/")

  /**
   * 2. Définition des variables d'environnement d'exécution
   */

   // Environnement de développement ou production ?
   // Les valeurs peuvent être: "prod" ou "dev"
   // Par défaut on considère que l'application s'exécute en environnement de PROD
   $env = "prod";

   // Liste des domaines que l'on considère comme étant des environnements de développement
   $dev_domains = [
       "127.0.0.1",
       "localhost",
       "webpizza.local"
   ];

  /**
   * 3. Définition des variables de base de données
   */
  
   // Liste des configurations de connections aux bases de données par défaut
   $db_config = []

   //Liste des connections aux bases de données
   // Cette listesera nourrie par le fichier db_connect.php
   $db = []
   
   // Inclusion de la config de la base de données
   require_once "database.php"

   /**
    * 4. Définition des variables de routage
    */

    /**
     * 5. Définition des expressions régulières
     */