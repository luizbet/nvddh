<?php

    $dbHost = 'nvddh.com.br';
    $dbUsername = 'u237680592_nvddh_db_main';
    $dbPassword = 'Anvddh11071903#';
    $dbName = 'nvddhusrs';

    $connect_db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

    if ($connect_db->connect_errno)
    {
        echo "erro";
    }
    else {
        echo "Conexão realizada com sucesso";
    }
?>