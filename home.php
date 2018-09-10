<?php

$orders = getOrdersBox();

//print_r($orders);

?>

<div class="row">
    <div class="col-6">
        <table class="table table-striped  mt-5">

            <thead>
            <h5 class="mt-5">Lista poslednjih prodaja</h5>

            <tr>
                <th>Rb</th>
                <th>Datum</th>

                <th>Ime</th>


                <th>Suma</th>

                <th>Pogledaj</th>


            </tr>
            </thead>
            <tbody>
            <?php foreach ($orders as $index => $order) : ?>
            <?php
            if ($index>9){
                break;
            }
                ?>
                <tr>
                    <td><?php echo $order["id"] ?></td>
                    <td><?php echo date("d.m.Y.", strtotime($order["order_date"])) ?></td>


                    <td><?php echo $order["name"] . " " . $order['surname'] ?></td>

                    <td><?php echo $order["sum"] ?></td>

                    <td><a href="/order/<?php echo $order['id'] ?>"><i class="fas fa-eye ml-4"></i></a></td>


                </tr>

            <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <div class="col-6">
        <table class="table table-striped  mt-5">

            <thead>
            <h5 class="mt-5">Lista artikala na minimumu</h5>

            <tr>
                <th>id</th>
                <th>Naziv</th>

                <th>količina</th>



                <th>cena</th>




            </tr>
            </thead>
            <tbody>
            <?php foreach (getArticlesBox() as $article) : ?>
                <?php if ($article['quantity']< $article['min_quantity']) : ?>
                <tr>
                    <td><?php echo $article["id"] ?></td>
                    <td><?php echo $article["name"] ?></td>


                    <td><?php echo $article["quantity"] ?></td>


                    <td><?php echo $article["price"] ?></td>





                </tr>
            <?php endif; ?>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>



