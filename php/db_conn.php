<?php
// $sname = "localhost";
// $uname = "root";
// $password = "";

// $db_name = "camxiandb";

$sname = "143.198.222.167";
$uname = "pddkdesbnj";
$password = "ZHPkRV464r";

$db_name = "pddkdesbnj";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection Failed!";
    exit();
}
