<?php
/**
 * Created by PhpStorm.
 * User: anmolsingh
 * Date: 2018-03-26
 * Time: 6:03 PM
 */

function insertQuery($conn, $sql){
    $result = oci_execute($sql);
    if ($result)
    {
        oci_commit($conn); // COMMIT TRANSACTION
        echo 'INSERT TO DB COMPLETED';
    } else {
        oci_rollback($conn); // ROLLBACK INSERTION
        $m = oci_error($sql);
        echo "<br>ERROR OCCURED"."</br>";
        foreach ($m as $ix){
            echo "<br>".$ix."</br>";
        }
    }
    oci_free_statement($sql);
}

function selectQuery($conn, $sql){
    $result = oci_execute($sql);
    if ($result)
    {
        echo '<br>No retr success</br>';
    } else {
        $m = oci_error($sql);
        echo "<br>ERROR OCCURED"."</br>";
        foreach ($m as $ix){
            echo "<br>".$ix."</br>";
        }
    }
}

function oraConnect(){
    $conn = $conn = oci_connect("ora_m7l0b", "a34202151", "dbhost.ugrad.cs.ubc.ca:1522/ug");
    if (!$conn) {
        $m = oci_error();
        echo $m['message'], "\n";
        exit;
    }
    else{
        print "Connected to Oracle!";
    }
    return $conn;
}