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

function add_pers($user, $password, $name, $surname, $id_of_org)
{
    $connection = oci_connect($user, $password, 'localhost/XEPDB1');
    if ($connection) {
        $first_p = "SELECT id FROM Humans";
        $stid = oci_parse($connection, $first_p);
        oci_execute($stid);
        $ert = array();
        $r = oci_fetch_all($stid, $ert, OCI_ASSOC);
        $new_id = max($ert["ID"]) + 1;
        $text = "INSERT INTO HUMANS values ($new_id, $name, $surname, $id_of_org)";
    } else {
        echo "Not found";
    }
}

function add_org($user, $password)
{
    $connection = oci_connect($user, $password, 'localhost/XEPDB1');
    if ($connection) {

    } else {
        echo "Not found";
    }
}

function delete_org($user, $password)
{
    $connection = oci_connect($user, $password, 'localhost/XEPDB1');
    if ($connection) {

    } else {
        echo "Not found";
    }
}

function delete_pers($user, $password)
{
    $connection = oci_connect($user, $password, 'localhost/XEPDB1');
    if ($connection) {

    } else {
        echo "Not found";
    }
}
function modify_pers()
{

}

function modify_org()
{

}

