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

function inc_id($con, $table_name)
{
    $first_p = "SELECT id FROM $table_name";
    $stid = oci_parse($con, $first_p);
    oci_execute($stid);
    $ert = array();
    $r = oci_fetch_all($stid, $ert, OCI_ASSOC);
    $new_id = max($ert["ID"]) + 1;
    return $new_id;
}

function add_pers($user, $password, $name, $surname, $id_of_org)
{
    $connection = oci_connect($user, $password, 'localhost/XEPDB1');
    if ($connection) {
        $new_id = inc_id($connection, 'Human');
        $text = "INSERT INTO HUMANS (ID, NAME, SURNAME, ID_OF_ORG) values ($new_id, $name, $surname, $id_of_org)";
        $stid = oci_parse($connection, $text);
        oci_execute($stid);
    } else {
        echo "Not found";
    }
}

function add_org($user, $password, $name_of_work)
{
    $connection = oci_connect($user, $password, 'localhost/XEPDB1');
    if ($connection) {
        $new_id = inc_id($connection, 'ORGS');
        $text = "INSERT INTO ORGS (ID, NAME_OF_WORK) values ($new_id, $name_of_work)";
        $stid = oci_parse($connection, $text);
        oci_execute($stid);
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
