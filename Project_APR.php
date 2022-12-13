<?php

function show_all($name_table, $user, $password)
{
    $connection = oci_connect($user, $password, 'localhost/XEPDB1');
    if ($connection) {
        $text = "SELECT * FROM $name_table";
        $stid = oci_parse($connection, $text);
        oci_execute($stid);
        $ert = array();
        $r = oci_fetch_all($stid, $ert, OCI_ASSOC);
        var_dump(json_encode($ert));
    } else {
        echo "Not found";
    }
}

function add_pers()
{

}

function add_org()
{

}

function delete_org()
{

}

function delete_pers()
{

}

show_all('HUMANS', 'TEST','TEST');