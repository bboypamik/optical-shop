<?php if (isset($_POST["submit"])) : ?>

    <?php
    newExam()
    ?>

<?php else: ?>

<?php
$client = getClient($params[1]);
?>

<div class="row mt-5">
    <div class="col-4">
        <h6>Datum pregleda: <?php echo date("m.d.Y")?></h6>
        <h6>Ime: <?php echo $client['name']. " ".$client['surname']?></h6>
        <h6>Adresa: <?php echo $client['adress']?></h6>
        <h6>Telefon: <?php echo $client['phone']?></h6>
    </div>
</div>

<div class="row">





<div class="row mt-5">
    <div class="col-1">
        <div class="row mt-5">
            <h6>Desno OD</h6> <br> <br>
            <h6>Levo OD</h6> <br> <br> <br> <br>
            <h6>Desno OD</h6> <br> <br>
            <h6>Levo OD</h6> <br> <br> <br> <br>
            <h6>Desno OD</h6> <br> <br>
            <h6>Levo OD</h6>
        </div>

    </div>

<div class="col-8">

<form  method="post">
    <div class="row">
        <div class="col-12"><h5 class="text-center">Daljina</h5></div>
    </div>
    <div class="row">
        <div class="col-3">
    <input type="text" name="daljina_D_Sph" value="" placeholder="sph" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="daljina_D_Cyl" value="" placeholder="Cyl" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="daljina_D_Axis" value="" placeholder="Axis" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="daljina_D_Add" value="" placeholder="Add" class="form-control mb-2 forma">
        </div>
    </div>


        <div class="row">
            <div class="col-3">
                <input type="text" name="daljina_L_Sph" value="" placeholder="sph" class="form-control mb-2 forma">
            </div>
            <div class="col-3">
                <input type="text" name="daljina_L_Cyl" value="" placeholder="Cyl" class="form-control mb-2 forma">
            </div>
            <div class="col-3">
                <input type="text" name="daljina_L_Axis" value="" placeholder="Axis" class="form-control mb-2 forma">
            </div>
            <div class="col-3">
                <input type="text" name="daljina_L_Add" value="" placeholder="Add" class="form-control mb-2 forma">
            </div>
        </div>
    <div class="row">
        <div class="col-12 mt-4"><h5 class="text-center">Srednja daljina</h5></div>
    </div>
    <div class="row ">

        <div class="col-3">
            <input type="text" name="s_daljina_D_Sph" value="" placeholder="sph" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="s_daljina_D_Cyl" value="" placeholder="Cyl" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="s_daljina_D_Axis" value="" placeholder="Axis" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="s_daljina_D_Add" value="" placeholder="Add" class="form-control mb-2 forma">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <input type="text" name="s_daljina_L_Sph" value="" placeholder="sph" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="s_daljina_L_Cyl" value="" placeholder="Cyl" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="s_daljina_L_Axis" value="" placeholder="Axis" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="s_daljina_L_Add" value="" placeholder="Add" class="form-control mb-2 forma">
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4"><h5 class="text-center">Blizina</h5></div>
    </div>
    <div class="row">
        <div class="col-3">
            <input type="text" name="blizina_D_Sph" value="" placeholder="sph" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="blizina_D_Cyl" value="" placeholder="Cyl" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="blizina_D_Axis" value="" placeholder="Axis" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="blizina_D_Add" value="" placeholder="Add" class="form-control mb-2 forma">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <input type="text" name="blizina_L_Sph" value="" placeholder="sph" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="blizina_L_Cyl" value="" placeholder="Cyl" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="blizina_L_Axis" value="" placeholder="Axis" class="form-control mb-2 forma">
        </div>
        <div class="col-3">
            <input type="text" name="blizina_L_Add" value="" placeholder="Add" class="form-control mb-2 forma">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <label for="comment">Komentar</label>
            <textarea class="form-control mb-2 forma" name="comment" id="" cols="30" rows="3"></textarea>
        </div>
    </div>
    <input type="hidden" name="client_id" value="<?php echo $params[1]?>">
    <input type="submit" name="submit" value="Završi" class="form-control  btn-primary forma mt-5">


</form>

</div>
</div>
</div
</div>

<?php endif; ?>