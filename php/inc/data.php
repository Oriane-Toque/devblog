<?php

/*
-----------------------------------------------------------------------------------------
--- NOUVELLE VERSION DU FICHIER inc/data.php A UTILISER UNIQUEMENT A PARTIR DES BONUS ---
-----------------------------------------------------------------------------------------
*/

// Les catégories
$dataCategoriesList = [
    // ID => objet Category
    1 => new Category('TeamBack'),
    2 => new Category('TeamFront'),
    3 => new Category('Collaboration'),
    4 => new Category('Ma Vie De Dev')
];

// Les auteurs
$dataAuthorsList = [
    // ID => objet Author
    1 => new Author('Maxime'),
    2 => new Author('Anthony'),
    3 => new Author('Alexandre'),
    4 => new Author('Dario'),
    5 => new Author('Julie'),
    6 => new Author('Lucie'),
    7 => new Author('Xavier')
];

// Les différents articles sous forme d'objet
$dataArticlesList = [
    1 => new Article(
        'Ivre, il refait tous les challenges en un week-end sans dormir.',
        'Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.',
        $dataAuthorsList[3]->title,
        '2017-07-13',
        $dataCategoriesList[4]->title
    ),
    2 => new Article(
        'POO or not POO, that is the question.',
        'La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec PHP.',
        $dataAuthorsList[5]->title,
        '2017-07-04',
        $dataCategoriesList[1]->title
    ),
    3 => new Article(
        'Git, pour les n00bs.',
        'Un p\'tit récap rapide pour tout ceux qui, comme moi, ont galéré sur ce magnifique outil de versionning.',
        $dataAuthorsList[6]->title,
        '2017-06-19',
        $dataCategoriesList[3]->title
    ),
    4 => new Article(
        'Le syndrome de la page blanche',
        'Cette frustration quand le code ne vient pas, le temps passe, la deadline approche...',
        $dataAuthorsList[7]->title,
        '2017-05-06',
        $dataCategoriesList[4]->title
    ),
];
