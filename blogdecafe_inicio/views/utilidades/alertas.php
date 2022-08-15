<?php
    if(!empty($alertas)){
        foreach($alertas AS $id=>$tipo){
            foreach($tipo AS $key=>$value){?>
                <p class="alerta <?php echo $key ?>"><?php echo $value; ?></p>
<?php       }
        }
    }
?>