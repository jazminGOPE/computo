<?php
    header("Content-disposition: attachment; filename=classroom.pdf");
    header("Content-type: application/pdf");
    readfile("classroom.pdf");
?>