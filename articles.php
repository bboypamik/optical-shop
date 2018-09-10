<table class="table table-striped datatable mt-5">
    <a class="form-control  btn-primary  col-2 text-center mt-5" href="/new-article">Dodaj Stavku</a>
    <thead>
    <h5 class="mt-5">Roba na lageru</h5>

    <tr>
        <th>id</th>
        <th>Naziv</th>
        <th>Jedinica mere</th>
        <th>količina</th>
        <th>min količina</th>


        <th>cena</th>
        <th>PDV stopa</th>
        <th>PDV</th>
        <th>Izmeni</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach (getArticlesBox() as $article) : ?>

        <tr>
            <td><?php echo $article["id"] ?></td>
            <td><?php echo $article["name"] ?></td>
            <td><?php echo $article["unit_of_measure"] ?></td>

            <td><?php echo $article["quantity"] ?></td>
            <td><?php echo $article["min_quantity"] ?></td>

            <td><?php echo $article["price"] ?></td>
            <td><?php echo $article["PDV_stopa"] ?></td>
            <td><?php echo $article["PDV"] ?></td>
            <td><a href="/change-article/<?php echo $article['id'] ?>"><i class="fas fa-pencil-alt"></i></a></td>


        </tr>
    <?php endforeach; ?>
    </tbody>

</table>

