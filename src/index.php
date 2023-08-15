<html>
  <head>
    <title>Construire une route pour un  site en symfony</title>
  </head>
  <body>
    <h2>Définition</h2
    <p>
      Une route est une adresse internet propre à notre site. Cette route est un point d'accès qui peut retourner unne page ou des données, par exemple. Pour naviguer dans notre site , nous avons besoin de définir un ensemble de routes.

      Symfony est un framework HTTP dont le but principal est de transformer une requête en reponse .
      pour cela , plusieurs architectures sont possibles, mais on utilisera le plus le plus répandu d'entre eux : le modele MVC qui convient perafaitement pour réaliser des applicationns web classiques.
      C'est une organisation du code qui permet de correctement séparer loes responsabilités des options de codes de notre application. Les models servent à interagir avec notre base de données , les views contiennent le rendu visuel de nos pages et les controllers servent d'intermédiaire et pilotent les interactions entre toutes nos options de code. il est en  quelque sorte le chef d'orchestre de notre application.

      <h3>Méthode de création d'un controlleur</h3>
      controller est chargé de connaitre les routes disponibles sur notre application et d'exécuter du code lorsque nous nous connectons à cette route

      Pour créer une première route, il nous faut créer notre premier controller . Pour cela :
     1_  Rendez-vous dans le dossier "src/Controller" et créer un fichier "HomeController.php".
      2_ Coller le code suivant dans ce fichier:

<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
  {
    #[Route('/')]
    public function number() : Response
    {
    return new Response(rand(0, 100));
    }
  }
?>

      3_ Désormais, si nous rafraîchissons la page initiale, nous devons voir un nombre compris entre  et 100 s'afficher Félicitation , nous venons de ccéer notre premieère route     
      
    </p>
<h1></h1>
  </body>
</html>