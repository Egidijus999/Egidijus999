<?php
include '../layout/header.php';

    $ugis = $svoris = 0;
    $KMI = "Cia bus tavo KMI";
    $color="primary";

    if ($_GET){
        $svoris=$_GET['svoris'];
        $ugis=$_GET['ugis'];
        $KMI= round((float)((int)$svoris/((int)$ugis/100)**2),2);
        if($KMI<18.5 || $KMI>25){
            $color= "danger";
        }else {
            $color="success";
        }
    }  
   ?>

<div class="container py-4">
    <form action="" method="GET">
        <div class="input-group-mb-3">
            <label for="ūgis">Ūgis, cm</label>
            <input  type="number" class="form-control" name="ugis">

        </div>

        <div class="input-group-mb-3">
            <label for="svoris">Svoris, kg</label>
            <input  type="number" class="form-control" name="svoris">

        </div>
        
        <div class="input-group-mb-3">
            <button class="btn btn-primary" type="submit">skaiciuok KMI</button>
        </div>
    </form>
    <div class="alert alert-<?php echo $color; ?>" role="alert">
        <?php echo $KMI; ?>
    </div>
</div>

<!--  $kg=1;
     $cm=1;
     $kmi=($kg/($cm*$cm))*10000;
     echo floor($kmi);     -->

<!-- KMI=masė(kg)/(ūgis(m))^2. Optimalus svorio indeksas - nuo 18,5 iki 25.-->

<?php
include '../layout/footer.php';
?>