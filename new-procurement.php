<h2 class="text-center mt-5">Izaberi dobavljača</h2>


<div class="row">
    <div class="col-12">
        <table class="table table-striped datatable mt-5">

            <thead>

            odo
            <tr>
                <th>Rb</th>
                <th>Ime</th>
                <th>Adresa</th>


            </tr>
            </thead>
            <tbody>
            <?php foreach (getClientsBox() as $client) : ?>
                <tr>
                    <td><?php echo $client["id"] ?></td>
                    <td><a href="/procurement-articles/<?php echo $client["id"] ?>"><?php echo $client["name"] . " " . $client["surname"] ?></a></td>
                    <td><?php echo $client["adress"] ?></td>



                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>