<?php

function getArticles(PDO $pdo, ?int $limit = null): array
{
    $sql = "SELECT * FROM articles ORDER BY id DESC";
    if ($limit) {
        $sql .= " LIMIT :limit";
    }
    $query = $pdo->prepare($sql);
    if ($limit) {
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getArticleById(PDO $pdo, int $id): array|bool
{
    $sql = "SELECT * FROM articles WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

function getArticleImage(string|null $image): string
{
    if ($image === null) {
        return _ASSETS_IMAGES_FOLDER_ . "default-article.jpg";
    } else {
        return _ARTICLES_IMAGES_FOLDER_ . $image;
    }
}
