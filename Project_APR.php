<?php

function show_all($name_table,$user, $password)
{
    $connection = oci_connect($user, $password, 'localhost/XEPDB1');
    if ($connection) {
        $stid = oci_parse($connection, "SELECT * FROM $name_table");
        oci_execute($stid);
        $ert = array();
        $r = oci_fetch_all($stid, $ert, OCI_ASSOC);
        var_dump($ert);

    } else {
        echo "Not found";
    }
}

