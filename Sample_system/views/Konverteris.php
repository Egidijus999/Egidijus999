<?php
include '../layout/header.php';
$pedos=0.1;
$coliai=0.1;
$arklioJega=0.1;
$gramai=0.1;
//$metrai=$centimetrai=$kilowatai=$kilogramai="resultatas";

    if (isset($_GET['btnIlgis'])){
    $pedos=$_GET['pedos'];
    if ((float)$pedos>0){
    $metrai = ($pedos*0.305); 
    }

    if (isset($_GET['btnAtstumas'])){
    $coliai=$_GET['coliai'];
    if  ((float)$coliai>0){  
    $centimetrai = ($coliai*2.54);
    }

    if (isset($_GET['btnJega'])){
    $arklioJega=$_GET['arklioJega'];
    if ((float)$arklioJega>0){
    $kilowatai = ($arklioJega*1.3596216173); 
    }
    
    if (isset($_GET['btnSvoris'])){
    $gramai=$_GET['gramai'];
    if ((float)$gramai>0){
    $kilogramai = ($gramai/1000); 
    }    
}
}
}  
}  

?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">
                    Konverteris
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <h3>Ilgis</h3>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="pedos" style="min-width: 8rem">pėdos</label>
                            <input type="number" class="form-control" name="pedos">
                            <label class="input-group-text" for="metrai" style="min-width: 8rem">metrai</label>
                            <input type="number" class="form-control" name="metrai" value="<?php echo $metrai; ?>">
                        </div>
                        <div class="input-group justify-content-center">
                            <button class="btn btn-primary mr-3" type="submit" style="min-width: 8rem"
                                name="btnIlgis" >Submit</button>
                        </div>
                    </form>
                    <form action="" method="GET">
                        <h3>Atstumas</h3>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="coliai" style="min-width: 8rem">coliai</label>
                            <input type="number" class="form-control" name="coliai">
                            <label class="input-group-text" for="centimetrai"
                                style="min-width: 8rem">centimetrai</label>
                            <input type="number" class="form-control" name="centimetrai"
                                value=" <?php echo $centimetrai; ?> ">

                        </div>
                        <div class="input-group justify-content-center">
                            <button class="btn btn-primary mr-3" type="submit" style="min-width: 8rem"
                                name="btnAtstumas">Submit</button>
                        </div>
                    </form>
                    <form action="" method="GET">
                        <h3>Jėga</h3>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="arklioJega" style="min-width: 8rem">arklioJega</label>
                            <input type="number" class="form-control" name="arklioJega">
                            <label class="input-group-text" for="kilowatai" style="min-width: 8rem">kilowatai</label>
                            <input type="number" class="form-control" name="kilowatai"
                                value=" <?php echo $kilowatai; ?> ">
                        </div>
                        <div class="input-group justify-content-center">
                            <button class="btn btn-primary mr-3" type="submit" style="min-width: 8rem"
                                name="btnJega">Submit</button>
                        </div>
                    </form>
                    <form action="" method="GET">
                        <h3>Svoris</h3>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="gramai" style="min-width: 8rem">gramai</label>
                            <input type="number" class="form-control" name="gramai">
                            <label class="input-group-text" for="kilogramai" style="min-width: 8rem">kilogramai</label>
                            <input type="number" class="form-control" name="kilogramai"
                                value=" <?php echo $kilogramai; ?> ">
                        </div>
                        <div class="input-group justify-content-center">
                            <button class="btn btn-primary mr-3" type="submit" style="min-width: 8rem"
                                name="btnSvoris">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footer.php' ?>