<?php

/* ==================================================================== <HEADER>
 * Title       : get-data-Combo.php
 * Description :
 * Creator     : Fabio Bruna <f.bruna@haaglandenmc.nl>
 * =========================================================== <PROGRAM HISTORY>
 * Wijzigingen in git zie http://dwh.mchaaglanden.local/gitphp/?sort=age
 * ===================================================================== <NOTES>
 *require('connect_nt-vm-dwh-p3.php');
 * ==================================================================== <SOURCE>
 */

$configs = include('../config.php');
require $configs['connectfile'];

$arrRecords = array();

$sql = "";

$result = sqlsrv_query($DWH_EAIB, $sql, array(), array('Scrollable' => 'static'));

if ($result === false) {
    error_log(__file__."PHP DWHLOG result === false", 0);
}

while ($row = sqlsrv_fetch_array($result)) {
    $arrRecords[] = array( 'id' => $row[0],
                           'text' => $row[1]
                         );
}

$o = array('data' => $arrRecords);

$buff = json_encode($o);

$contentType = "application/json; charset=utf-8";
header("Content-Type: {$contentType}");
header("Content-Size: " . strlen($buff));

echo $buff;

return;
