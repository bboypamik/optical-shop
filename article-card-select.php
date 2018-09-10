<table class="table table-striped datatable mt-5">

    <thead>
    <h5 class="mt-5 mb-3">Artikli</h5>

    <tr>
        <th>id</th>
        <th>Naziv</th>

        <th>količina</th>



        <th>cena</th>



    </tr>
    </thead>
    <tbody>
    <?php foreach (getArticlesBox() as $article) : ?>

        <tr>

            <td><?php echo $article["id"] ?></td>
            <td><a href="/article-card/<?php echo $article['id']; ?>"><?php echo $article["name"] ?></a></td>


            <td><?php echo $article["quantity"] ?></td>


            <td><?php echo $article["price"] ?></td>





        </tr>
    <?php endforeach; ?>
    </tbody>

</table>