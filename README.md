RéALISATION _ _ _ _ _
À partir de la base de données MySQL fournie avec le sujet, vous allez devoir réaliser un site qui permettra
d’interagir avec cette dernière. Ne passez pas trop de temps sur l’aspect visuel du site, le but du projet
est orienté PHP et MySQL. Pensez bien à séparer le code permettant l’affichage et le code permettant la
logique. Bien entendu, votre page devra être valide HTML5 et nous tiendrons compte de l’aspect général
du site


PARTIE OBLIGATOIRE _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
Vous allez créer un site permettant de gérer un cinéma. Essayez de vous mettre en situation et imaginons
donc que vous êtes à la caisse du cinéma de votre ville. Ainsi le site devra permettre :
• De rechercher des films par nom
• De rechercher les films par genre.
• De rechercher les films par date de projection.
• De rechercher les films par date de production.
• De rechercher les films par distributeur.

• Afficher la fiche d'un film :
- Résumé
- Titre
- Distrib
- Date de projection
- durée
- annee de prod
- affiche
- genre

• De rechercher un membre par son nom et/ou son prénom
• Afficher la fiche d'un membre :
- Afficher l’historique(les films qu’il a vus).
- Afficher le dernier film vu
- afficher ses informations

<!-- -----------------------TP--------------------------->

Pour le TP aujourd'hui, je vais vous faire continuer de travailler sur le site de cinéma.

Vous allez devoir créer une nouvelle page pour afficher le detail d'un film :
/film.php?id=1

Vous allez créer un fichier film.php qui fonctionne comme votre index.php, mais pour afficher uniquement le detail d'un seul film

Dans votre model Film, vous allez devoir faire une fonction getById pour recuperer un film grace a son ID

La requete SQL est :
SELECT * FROM film WHERE id = $id

Faites bien attention à ne pas laisser de faille SQL

Vous devez également faire une page Membres ou vous afficherez la liste des membres en base de donnée, donc nouveau model, nouvelle page.