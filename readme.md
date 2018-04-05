#CJDB

WIP

dans le fichier index.php,

the_time() plutôt que the_date() pour éviter les soucis d'affichage si plusieurs posts du même jour

Recherche
dans le fichier searchform.php, c'est la fonction de recherche native qui est utilisée, avec en hhidden le type de post afin de les trier dans l'affichage des résultats.
--> j'utiliserai à terme un plugin pour proposer des options plus sophistiquées, avec la fonction native en backup


Plugins mis en oeuvre

Structure Stylesheets
au début du projet, Bryan a décidé de travailler SASS. En cours de projet, on a exprimé le souhait de travailler également en SCSS. Pour faire cohabiter les deux préférences, on a utilisé CodePen pour convertir le SCSS en SASS avant interprétation.


http://thesassway.com/beginner/how-to-structure-a-sass-project


Adding print-friendly styles is highly recommended.

    You can include a print stylesheet with media="print" or add in a print media block in your main stylesheet.


https://www.alsacreations.com/astuce/lire/1437-comment-interdire-le-mode-de-compatibilite-sur-ie.html


***Enqueuing Scripts and Styles #Enqueuing Scripts and Styles***
The proper way to add scripts and styles to your theme is to enqueue them in the functions.php files. The style.css file is required in all themes, but it may be necessary to add other files to extend the functionality of your theme.
https://developer.wordpress.org/themes/basics/including-css-javascript/https://developer.wordpress.org/themes/basics/including-css-javascript/
