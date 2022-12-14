<!doctype html>
  <html lang="fr">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Bootstrap Icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <!-- Style -->
      <link rel="stylesheet" href="<?= $assetsBaseUri ?>/css/style.css">
      <title>Environnement-Blog - <?= $pageTitle?></title>
    </head>
    <body>
      <header>
          <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">  
            <a class="navbar-brand" href="<?= $router->generate('main-home') ?>">Environnement-Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav ">
                <?php foreach( $categoryList as $category ) :?>
                <li class="nav-item">
                  <a class="nav-link" href="<?= $baseUri ?>/article/categorie/<?= $category->getId() ?>"><?= $category->getName() ?></a>
                </li>
                <?php endforeach ?>
              </ul>
            </div>
          </div> 
        </nav>
          <section class="text-center">
            <h1>Environnement-Blog</h1>
            <hr />
            <p>
              Un blog collaboratif de personnes sensibles à l'environnement qui souhaitent partager des Bonnes pratiques, des innovations ou tout simplement témoigner.
            </p>
          </section>
        </header>
        <div class="container">
          <div class="row">
            <main class="col-lg-9">