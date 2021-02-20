<?php

namespace App\Controllers;

class CoreController {

  public static function checkAuthorization( $roles = [] )
  {
      global $router;

      // Vérifier qu'un utilisateur est connecté
      // on pourrait aussi vérifier que $_SESSION['user'] contient
      // bien une instance de l'objet AppUser (grace à instanceof)
      // @see https://www.php.net/manual/fr/language.operators.type.php
      if( isset( $_SESSION['user'] ) )
      {
          // On récupère les infos grace à $_SESSION['user']
          // et plus particulièrement son rôle
          $userRole = $_SESSION['user']->getRole();

          // On vérifie si le role de l'utilisateur est présent
          // dans le tableau $roles passé en paramètre
          if( in_array( $userRole, $roles ) )
          {
              // Si le rôle fait partie des roles autorisés
              // On retourne true et on laisse le code de la page
              // s'éxecuter, et la view s'afficher
              return true;
          }
          else
          {
              // Sinon, on affiche un message d'erreur (ex erreur 403)
              // Et surtout, on quitte le script (ou on redirige)
              // Pour s'assurer que l'utilisateur n'accède pas
              // à la page, grace a exit()
              echo "Vous n'avez pas le droit d'accéder à cette page !";
              exit();
          }
      }
      // Sinon, rediriger vers la page de connexion
      else
      {
          header( "Location: ".$router->generate( 'login' ) );
          exit();
      }
  }

    /**
     * Méthode permettant d'afficher du code HTML en se basant sur les views
     *
     * @param string $viewName Nom du fichier de vue
     * @param array $viewVars Tableau des données à transmettre aux vues
     * @return void
     */
    protected function show(string $viewName, $viewVars = []) {
        // On globalise $router car on ne sait pas faire mieux pour l'instant
        global $router;

        // Comme $viewVars est déclarée comme paramètre de la méthode show()
        // les vues y ont accès
        // ici une valeur dont on a besoin sur TOUTES les vues
        // donc on la définit dans show()
        $viewVars['currentPage'] = $viewName; 

        // définir l'url absolue pour nos assets
        $viewVars['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
        // définir l'url absolue pour la racine du site
        // /!\ != racine projet, ici on parle du répertoire public/
        $viewVars['baseUri'] = $_SERVER['BASE_URI'];

        // On veut désormais accéder aux données de $viewVars, mais sans accéder au tableau
        // La fonction extract permet de créer une variable pour chaque élément du tableau passé en argument
        extract($viewVars);
        // => la variable $currentPage existe désormais, et sa valeur est $viewName
        // => la variable $assetsBaseUri existe désormais, et sa valeur est $_SERVER['BASE_URI'] . '/assets/'
        // => la variable $baseUri existe désormais, et sa valeur est $_SERVER['BASE_URI']
        // => il en va de même pour chaque élément du tableau

        // $viewVars est disponible dans chaque fichier de vue
        require_once __DIR__.'/../views/layout/header.tpl.php';
        require_once __DIR__.'/../views/partials/nav.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/layout/footer.tpl.php';
    }

}