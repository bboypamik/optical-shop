<pre>
<?php

$procurements = getProcurementsBox();

//print_r($procurements);

?>
</pre>
<table class="table table-striped datatable  mt-5">

    <thead>
    <h5 class="mt-5 mb-3">Knjiga ulaznih faktura</h5>

    <tr>
        <th>Rb</th>
        <th>Datum porudžbine</th>

        <th>Ime dobavljača</th>


        <th>Suma</th>

        <th>Pogledaj stavke</th>


    </tr>
    </thead>
    <tbody>
    <?php foreach ($procurements as $procurement) : ?>
        <tr>
            <td><?php echo $procurement["id"] ?></td>
            <td><?php echo date("d.m.Y.", strtotime($procurement["procurement_date"])) ?></td>


            <td><?php echo $procurement["name"] . " " . $procurement['surname'] ?></td>

            <td><?php echo $procurement["sum"] ?></td>

            <td><a href="/order/<?php echo $procurement['id'] ?>"><i class="fas fa-eye ml-4"></i></a></td>


        </tr>

    <?php endforeach; ?>
    </tbody>

</table>