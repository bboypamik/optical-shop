<?php
$exams =getExamBox();


?>
<a class="form-control  btn-primary  col-2 text-center mt-5" href="/new-exam">Novi pregled</a>
<h2 class="mt-5 mb-5 ">Očni pregledi</h2>



<table class="table table-striped datatable mt-5">

    <thead>


    <tr>
        <th>redni broj</th>

        <th>Ime</th>
        <th>Datum</th>


        <th>Pogledaj</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($exams as $exam) : ?>

        <tr>
            <td><?php echo $exam["id"] ?></td>

            <td><?php echo $exam["name"] . " " . $exam["surname"] ?></td>

            <td><?php echo date("d.m.Y.", strtotime($exam["date"])) ?></td>





            <td><a href="/exam/<?php echo $exam['id'] ?>"><i class="fas fa-eye ml-4"></i></a></td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

