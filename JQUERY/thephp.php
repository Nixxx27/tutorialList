<?php

require 'namespace.php';

use App as ADB;

$db = new ADB\db_conn();
echo $db->connect();

