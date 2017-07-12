<?php
    require_once 'pig.class.php';
    $pig1=new pig();
    $pig1->name="小胖";
    $pig1->weight=200;
    $pig1->addweight(60);
    $pig1->showweight();
?>