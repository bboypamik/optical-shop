<pre>
<?php
$articleCardBox = getArticleCardBox();
$article = getOne('articles' ,$params[1] );
$users
//print_r($article);
?>
    </pre>



<table class="table table-striped datatable  mt-5">

    <thead>
    <h2 class="mt-5 "><?php echo $article['name']." ".$article['price']." RSD"?></h2>
    <h2 class="mb-5"><?php echo $article['quantity']." kom"?></h2>

    <tr>
        <th>RB. Prodaje</th>
        <th>Datum</th>




        <th>Suma</th>

        <th>Pogledaj</th>


    </tr>
    </thead>
    <tbody>

    <?php foreach ($articleCardBox as $order) : ?>

        <tr>
            <td><?php echo $order["id"] ?></td>
            <td><?php echo $order["id"] ?></td>
            <td><?php echo date("d.m.Y.", strtotime($order["order_date"])) ?></td>


            <td><?php echo $order["sum"] ?></td>



            <td><a href="/order/<?php echo $order['id'] ?>"><i class="fas fa-eye ml-4"></i></a></td>


        </tr>

    <?php endforeach; ?>
    </tbody>

</table>