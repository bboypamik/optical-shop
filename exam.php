<pre>
<?php
$exam = getExam($params[1]);
$client = getClient($exam['client_id']);
//print_r($exam);
?>
</pre>


<div class="row mt-5">
    <div class="col-4">
        <h6>Datum pregleda: <?php echo $exam['date']?></h6>
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


                <div class="row">
                    <div class="col-12"><h5 class="text-center">Daljina</h5></div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <input type="text" name="daljina_D_Sph" value="<?php echo $exam['daljina_D_Sph']?> " readonly placeholder="sph" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="daljina_D_Cyl" value="<?php echo $exam['daljina_D_Cyl']?>" readonly placeholder="Cyl" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="daljina_D_Axis" value="<?php echo $exam['daljina_D_Axis']?>" readonly placeholder="Axis" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="daljina_D_Add" value="<?php echo $exam['daljina_D_Add']?>" readonly placeholder="Add" class="form-control mb-2 forma">
                    </div>
                </div>


                <div class="row">
                    <div class="col-3">
                        <input type="text" name="daljina_L_Sph" value="<?php echo $exam['daljina_L_Sph']?>" readonly placeholder="sph" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="daljina_L_Cyl" value="<?php echo $exam['daljina_L_Cyl']?>" readonly placeholder="Cyl" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="daljina_L_Axis" value="<?php echo $exam['daljina_L_Axis']?>" readonly placeholder="Axis" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="daljina_L_Add" value="<?php echo $exam['daljina_L_Add']?>" readonly placeholder="Add" class="form-control mb-2 forma">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-4"><h5 class="text-center">Srednja daljina</h5></div>
                </div>
                <div class="row ">

                    <div class="col-3">
                        <input type="text" name="s_daljina_D_Sph" value="<?php echo $exam['s_daljina_D_Sph']?>" readonly placeholder="sph" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="s_daljina_D_Cyl" value="<?php echo $exam['s_daljina_D_Cyl']?>" readonly placeholder="Cyl" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="s_daljina_D_Axis" value="<?php echo $exam['s_daljina_D_Axis']?>" readonly placeholder="Axis" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="s_daljina_D_Add" value="<?php echo $exam['s_daljina_D_Add']?>" readonly placeholder="Add" class="form-control mb-2 forma">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <input type="text" name="s_daljina_L_Sph" value="<?php echo $exam['s_daljina_L_Sph']?>" readonly placeholder="sph" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="s_daljina_L_Cyl" value="<?php echo $exam['s_daljina_L_Cyl']?>" readonly placeholder="Cyl" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="s_daljina_L_Axis" value="<?php echo $exam['s_daljina_L_Axis']?>" readonly placeholder="Axis" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="s_daljina_L_Add" value="<?php echo $exam['s_daljina_L_Add']?>" readonly placeholder="Add" class="form-control mb-2 forma">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-4"><h5 class="text-center">Blizina</h5></div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <input type="text" name="blizina_D_Sph" value="<?php echo $exam['blizina_D_Sph']?>" readonly placeholder="sph" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="blizina_D_Cyl" value="<?php echo $exam['blizina_D_Cyl']?>" readonly placeholder="Cyl" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="blizina_D_Axis" value="<?php echo $exam['blizina_D_Axis']?>" readonly placeholder="Axis" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="blizina_D_Add" value="<?php echo $exam['blizina_D_Add']?>" readonly placeholder="Add" class="form-control mb-2 forma">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <input type="text" name="blizina_L_Sph" value="<?php echo $exam['blizina_L_Sph']?>" readonly placeholder="sph" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="blizina_L_Cyl" value="<?php echo $exam['blizina_L_Cyl']?>" readonly placeholder="Cyl" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="blizina_L_Axis" value="<?php echo $exam['blizina_L_Axis']?>" readonly placeholder="Axis" class="form-control mb-2 forma">
                    </div>
                    <div class="col-3">
                        <input type="text" name="blizina_L_Add" value="<?php echo $exam['blizina_L_Add']?>" readonly placeholder="Add" class="form-control mb-2 forma">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label for="comment">Komentar</label>
                        <textarea class="form-control mb-2 forma mb-5" name="comment"  readonly id="" cols="30" rows="3"><?php echo $exam['comment']?></textarea>
                    </div>
                </div>


        </div>
    </div>
</div
</div>

