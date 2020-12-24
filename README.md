# playWithNamespace
Sensibilisation namespace php

 creation d'une structure standard pour comprendre et implementer un routage propre
 
 # Mais pourquoi?

 Je n'ai pas compris pourquoi l'appli ne voulait pas la class

    # Les lois du code sont impénétrables. 

Ça fait 3 jours que je me fight avec namespace/composer/vendor pour afficher juste une fucking fonction d'une class. J'ai 4 applis différentes avec le même problème ( on ne trouve pas la class demander), j’en suis venu à me dire que c'était le logiciel ou même composer lui-même ou ma version de PHP installé... j'avoue être à deux doigts de TOUT supprimer et re-installer... 


    Ce matin jme dit "OK je fais plus simple"  j'ouvre la console 
    mkdir routing
    cd routing
    composer init
    touche index.php
    code .
    
je change composer.json pour ajouter 
        
        "autoload":{​ "psr-4": {​ "App\\": "App/" }​ }​,

un coup de 

        composer dump-autoload -o
​
    Je rajoute le dossier contrôler avec un MainController et sa fonction view() qui fait un écho
    truc tout simple
    et la 
    
    require_once __ DIR__ . '/vendor/autoload.php';
    
et bordel ça fonctionne... 
Pourtant je suis convaincu d'avoir fait les mêmes manipulations avant! 

## FRUSTRATION QUAND TU ME TIENS


