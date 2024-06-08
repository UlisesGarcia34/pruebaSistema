<?php

foreach ($alertas as $key => $alerta) :
    foreach ($alerta as $mensaje) :
?>

        <div id="alerta" class="alert <?php echo $key; ?> alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                <?php echo $mensaje; ?>
            </div>
        </div>

<?php
    endforeach;
endforeach;
?>