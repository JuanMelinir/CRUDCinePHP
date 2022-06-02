<?php
require 'config/database.php';

$db=conectarDB();

use Model/ActiveRecord;
ActiveRecord::setDB($db);
?>