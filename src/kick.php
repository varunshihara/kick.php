<?php

class Database {

    // connection to database
    function connectdb($host, $username, $password, $database) {
        mysql_select_db($database, mysql_connect($host, $username, $password));
    }
    // to find max id and return new id, thatis, +1 of max
    function newid($table, $primary)
    {
        $query="SELECT max($primary) FROM $table;";
        $data=mysql_query($query) or die("Error :".mysql_error());
        $res=mysql_fetch_array($data);
        return $res[0] + 1;
    }
}

?>