<?php
    header("Content-disposition: attachment; filename=inv_computo.pdf");
    header("Content-type: application/pdf");
    readfile("inv_computo.pdf");
?>
