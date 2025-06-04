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
