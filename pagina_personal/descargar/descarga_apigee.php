<?php
    header("Content-disposition: attachment; filename=apigee.pdf");
    header("Content-type: application/pdf");
    readfile("apigee.pdf");
?>