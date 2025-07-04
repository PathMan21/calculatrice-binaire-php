# Calculatrice PHP binaire avec composer

Une petite calculatrice développée en PHP orienté objet, accompagnée de tests unitaires avec PHPUnit et d'outils d'analyse de qualité de code PHP-CS-Fixer notamment

## Ajouts

- Quatre opérations : addition, soustraction, multiplication, division
- Gestion des erreurs (division par zéro, opération inconnue)
- Code testé avec PHPUnit
- Vérifications de style et de propreté avec PHP-CS-Fixer et PHPMD

##  Mise en place :

1. **Cloner le dépôt :**
   ```bash
   git clone https://github.com/PathMan21/calculatrice-binaire-php
   composer install

Tests et commandes à utiliser :
(je n'ai pas mis make comme j'ai pu le voir, car étant en windows, les test unitaire ne marchait pas avec cette commande)

test unitaire : composer test     
Toutes les commandes ensemble : composer analyse 
