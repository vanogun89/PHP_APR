<?php

function show_all($name_table,$user, $password)
{
    $connection = oci_connect($user, $password, 'localhost/XEPDB1');
    if ($connection) {
        $stid = oci_parse($connection, "SELECT * FROM $name_table");
        oci_execute($stid);
        $ert = array();
        $r = oci_fetch_all($stid, $ert, OCI_ASSOC);
        var_dump(json_encode($ert));
    } else {
        echo "Not found";
    }
}
function show_pers()
{

}

function show_orgs()
{

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