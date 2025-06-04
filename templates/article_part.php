<?php

$imagePath = getArticleImage($article["image"]);

?>


<div class="col-md-4 my-2">
    <div class="card">
        <img src="<?= $imagePath ?>" class="card-img-top" alt="<?= $article["title"] ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $article["title"] ?></h5>
            <p class="card-text"><?= $article["content"] ?></p>
            <a href="actualite.php?id=<?= $article["id"] ?>" class="btn btn-primary">Voir l'article</a>
        </div>
    </div>
</div>