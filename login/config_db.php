<?php

    $dbHost = 'http://nvddh.com.br/u237680592_nvddh_db';
    $dbUsername = 'u237680592_nvddh_db_dev';
    $dbPassword = 'Anvddh11071903#';
    $dbName = 'nvddhusrs';

    $connect_db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

    if ($connect_db->connect_errno){
        echo "erro";
    }
    else {
        echo "Conexão realizada com sucesso";
    }
?>