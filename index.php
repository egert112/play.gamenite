<?php
include 'admin/config.php';

$sql = "SELECT * FROM player;";
$result = SelectSQL($sql, $conn);
if ($row = $result) {
    echo "Mysql connection success!\n" .  $row['name'];
}
?>
