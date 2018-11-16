<?php

require __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;
use App\Models\Article;
printf("Now: %s", Carbon::now());


$db = new PDO('mysql:host=127.0.0.1;dbname=examphp', 'root', 'root');
//print_r($db);

$getArticles = $db->prepare('SELECT * FROM articles');
$getArticles->execute();
$articles = $getArticles->fetchAll(PDO::FETCH_OBJ);

//var_dump($articles);


foreach($articles as $articleDb) {
    $article = new Article;
    $article->setTitle($articleDb->title);
    $article->setBody($articleDb->body);
    $article->setAuthorFirstName($articleDb->first_name);
    $article->setAuthorLastName($articleDb->last_name);
    $article->setCreatedAt($articleDb->created_at);
    $article->setUpdatedAt($articleDb->updated_at);
}

