<div class="row">
    <div class="col-8"></div>
    <div class="col-4">
        <button id="print" type="button" class="form-control  btn-primary forma mt-5">Štampaj</button>
    </div>
</div>

<table class="table table-striped datatable mt-5">

    <thead>
    <h5 class="mt-5 mb-3">Roba na lageru</h5>

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

        <?php if ($article['quantity']>1): ?>
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

    <?php endif; ?>
    <?php endforeach; ?>
    </tbody>

</table>