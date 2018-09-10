<pre>
<?php
$clientCard = getClientCardBox();
$client = getOne('clients' , $params[1]);
//print_r($clientCard);
?>
</pre>

<div class="row mt-5">
    <div class="col-4">

        <h6>Ime: <?php echo $client['name']. " ".$client['surname']?></h6>
        <h6>Adresa: <?php echo $client['adress']?></h6>
        <h6>Telefon: <?php echo $client['phone']?></h6>
    </div>
</div>

<table class="table table-striped datatable  mt-5">

    <thead>
    <h5 class="mt-5 mb-3">Računi</h5>

    <tr>
        <th>RB</th>
        <th>Datum</th>




        <th>Suma</th>

        <th>Pogledaj</th>


    </tr>
    </thead>
    <tbody>

    <?php foreach ($clientCard as $index=> $order) : ?>

        <tr>
            <td><?php echo $index +1 ?></td>
            <td><?php echo date("d.m.Y.", strtotime($order["order_date"])) ?></td>




            <td><?php echo $order["sum"] ?></td>

            <td><a href="/order/<?php echo $order['id'] ?>"><i class="fas fa-eye ml-4"></i></a></td>


        </tr>

    <?php endforeach; ?>
    </tbody>

</table>