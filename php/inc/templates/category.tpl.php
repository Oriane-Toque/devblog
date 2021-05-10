<div class="container">
    <h1><?= $categoryToDisplay->title; ?></h1>

<?php
    /* INITIALISATION D'UN TABLEAU VIDE QUI VA RÉCUPERER LES OBJETS ARTICLES SELON
    LA CATEGORIE A AFFICHER */
    $articlesOfCategory = [];

    /* On boucle sur le tableau articlesList afin d'avoir accès aux objets articles */
    foreach($articlesList as $articleId => $articleObject) {

        /* LE BUT ÉTANT DE COMPARER LA VALEUR CATEGORIE DE CHAQUE OBJET CONTENU DANS
        articlesList avec la catégorie qu'on désire afficher */
        // si la catégorie d'un article vaut la catégorie qu'on désire afficher
        if($categoryToDisplay->title == $articleObject->category) {
        // si la condition est vraie
        // alors ajouter à mon tableau l'objet article
        $articlesOfCategory[] = $articleObject;
    }
}

?>
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

    <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
    MAIS au dela d'une certaine taille, il n'en prendra plus que 9
    https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
    <main class="col-lg-9">

        <!-- ICI JE GENERE LES ARTICLES CORRESPONDANT A LA CATÉGORIE QUE JE DESIRE AFFICHER
        $articlesOfCategory est un tableau qui contient selon la condition imposée plus haut les
        objets articles qui ont la meme catégorie que celle que j'affiche !! -->
        <?php foreach($articlesOfCategory as $articleId => $articleObject): ?>
        <article class="card">
            <h2 class="card-title"><?= $articleObject->title; ?></h2>
            <p class="infos">
                Posté par <a href="#" class="card-link"></a> le <time datetime="<?= $articleObject->date; ?>"><?= $articleObject->date; ?></time> dans <a href="#"
                    class="card-link">#<?= $articleObject->category; ?></a>
            </p>
            <p class="card-text"><?= $articleObject->content; ?></p>
            </div>
        </article>
        <?php endforeach; ?>

        <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="index.php"><i class="fa fa-arrow-left"></i> Retour à l'accueil</a></li>
            </ul>
        </nav>

    </main>
    </div>
</div>