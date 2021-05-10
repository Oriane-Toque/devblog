  <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
  <div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">

        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><?= $articleToDisplay->title; ?></h2>
            <p class="infos">
              Posté par <a href="#" class="card-link"></a> le <time datetime="<?= $articleToDisplay->date; ?>"><?= $articleToDisplay->date; ?></time> dans <a href="#"
                class="card-link">#<?= $articleToDisplay->category; ?></a>
            </p>
            <p class="card-text"><?= $articleToDisplay->content; ?></p>
          </div>
        </article>

        <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="index.html"><i class="fa fa-arrow-left"></i> Retour à l'accueil</a></li>
          </ul>
        </nav>

      </main>

      <aside class="col-lg-3">
        <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Rechercher un article..."
            aria-label="Rechercher un article..." aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Allez</button>
          </div>
        </div>

        <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
        <div class="card">
          <h3 class="card-header">Catégories</h3>
          <ul class="list-group list-group-flush">
            <?php foreach($categoriesList as $categoryId => $categoryObject): ?>
              <li class="list-group-item"><a href="category.php"><?= $categoryObject; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
        <div class="card">
          <h3 class="card-header">Auteurs</h3>
          <ul class="list-group list-group-flush">
          <?php foreach ($authorsList as $authorId => $authorName) : ?>
            <li class="list-group-item"><?= $authorName; ?></li>
          <?php endforeach; ?>
          </ul>
        </div>

      </aside>
    </div><!-- /.row -->