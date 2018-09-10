<pre>
<?php

$orders = getOrdersBox();

//print_r($orders);

?>
</pre>
<table class="table table-striped datatable  mt-5">

    <thead>
    <h5 class="mt-5 mb-3">Knjiga izlaznih faktura</h5>

    <tr>
        <th>Rb</th>
        <th>Datum</th>

        <th>Ime</th>


        <th>Suma</th>

        <th>Pogledaj</th>


    </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $order) : ?>
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


