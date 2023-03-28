<?php
$mhs =array(
    array ("jagad","21101155","bangli"),
    array ("srik","21101155","singaraja"),
    array ("nanda","21101155","denpasar"),
    array ("sudi","21101155","singaraja"),
    array ("apri","21101155","unknown"),
    array ("aldy","21101155","denpasar"),
);
header('content-type: application/json; charset=utf-8');
echo json_encode($mhs);