<h2>Monitoring</h2>

<div class="monitoring">
    <h3>Articles</h3>
    <table>
        <thead>
            <tr>
                <th>Titre <a class="sort" href="?action=monitoring&sort=title&order=asc">↑</a><a class="sort" href="?action=monitoring&sort=title&order=desc">↓</a></th>
                <th>vues <a class="sort" href="?action=monitoring&sort=views&order=asc">↑</a><a class="sort" href="?action=monitoring&sort=views&order=desc">↓</a></th>
                <th>commentaires <a class="sort" href="?action=monitoring&sort=comments_count&order=asc">↑</a><a class="sort" href="?action=monitoring&sort=comments_count&order=desc">↓</a></th>
                <th>Date de publication <a class="sort" href="?action=monitoring&sort=date_creation&order=asc">↑</a><a class="sort" href="?action=monitoring&sort=date_creation&order=desc">↓</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) : ?>
                <tr>
                    <td><a href="?action=showArticle&id=<?= $article->getId() ?>"><?= $article->getTitle() ?></a></td>
                    <td><?= $article->getViews() ?></td>
                    <td><?= $article->getCommentsCount() ?></td>
                    <td><?= $article->convertDateCreation() ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
