<?php

if ($article["image"] === null) {
    $imagePath = _ASSETS_IMAGES_FOLDER_ . "default-article.jpg";
    $imageAlt = "image par defaut";
} else {
    $imagePath = _ARTICLES_IMAGES_FOLDER_ . $article["image"];
    $imageAlt = $article["image"];
}

?>


<div class="col-md-4 my-2">
    <div class="card">
        <img src="<?= $imagePath ?>" class="card-img-top" alt="<?= $imageAlt ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $article["title"] ?></h5>
            <p class="card-text"><?= $article["content"] ?></p>
            <a href="actualite.php?id=<?= $key ?>" class="btn btn-primary">Voir l'article</a>
        </div>
    </div>
</div>