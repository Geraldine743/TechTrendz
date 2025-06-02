<?php
require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/templates/header.php";


?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/image/logo-tech-trendz.png" class="d-block mx-lg-auto img-fluid" alt="logo techtrendz" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Explorez le futur, un pixel à la fois !</h1>
        <p class="lead">Découvrez notre blog dédié à l'informatique, où passion et expertise se rencontrent pour vous offrir des articles variés sur les dernières tendances, astuces et innovations technologiques.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="#" class="btn btn-primary btn-lg px-4 me-md-2">Voir les actualités</a>
        </div>
    </div>
</div>

<div class="row text-center">
    <?php foreach ($articles as $key => $article) {
        require __DIR__ . "/templates/article_part.php";
    } ?>
</div>


<?php require_once __DIR__ . "/templates/footer.php" ?>