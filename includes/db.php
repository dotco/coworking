<?php
$DB_CONFIG = array(
    'host'     => 'gorilla.go.co',
    'username' => 'oppcoregistrar',
    'password' => 'g0c0my100',
    'db'       => 'd0tc0_registrar_tracking'
);
if (!function_exists('connect_to_db')) {
    $db_conn = false;
    function connect_to_db()
    {
        global $DB_CONFIG;
        global $db_conn;

        if ($db_conn) return $db_conn;

        $db_conn = mysql_pconnect($DB_CONFIG['host'], $DB_CONFIG['username'], $DB_CONFIG['password']) or die('mysql_connect: ' . mysql_error());
        mysql_select_db($DB_CONFIG['db']) or die('mysql_select: ' . mysql_error());
    }
}
function x1($qs) {
    // xone_row()
    $res = mysql_query($qs);
    if (!$res) die(mysql_error());
    return mysql_fetch_assoc($res);
}

function xa($qs, $key_col = false) {
    // xall_rows()
    $res = mysql_query($qs);
    if (!$res) die(mysql_error());
    $rows = array();
    while ($a = mysql_fetch_assoc($res)) {
        if ($key_col)
            $rows[$a[$key_col]] = $a;
        else
            $rows[] = $a;
    }
    return $rows;
}
