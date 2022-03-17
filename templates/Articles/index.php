<h1>Articles</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- ITERATE ARTICLES QUERY OBJECT -->
    <!-- $articles follows variable name found in ArticlesController -->
    <?php
foreach ($articles as $article) {?>
<tr>
    <td>
        <?=$this->Html->link($article->title, ['action' => 'view', $article->slug])?>
    </td>
    <td>
        <?=$article->created->format(DATE_RFC850)?>
    </td>
</tr>
    <?php }?>
</table>
