<?php 
// TODO : fetch articles
$articles = [
    (object)[
        'title' => 'Article 1',
        'views' => 10,
        'commentsCount' => 2,
        'dateCreation' => '2023-01-01',
    ],
    (object)[
        'title' => 'Article 2',
        'views' => 20,
        'commentsCount' => 3,
        'dateCreation' => '2023-01-02',
    ],
]; 
?>

<h2>Monitoring</h2>

<div class="monitoring">
    <h3>Articles</h3>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Nombre de vues</th>
                <th>Nombre de commentaires</th>
                <th>Date de publication</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) : ?>
                <tr>
                    <td><?= $article->title // $article->getTitle()  ?></td>
                    <td><?= $article->views // $article->getViews() ?></td>
                    <td><?= $article->commentsCount // $article->getCommentsCount() ?></td>
                    <td><?= $article->dateCreation // $article->getDateCreation() ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
