<?php

include("../vendor/autoload.php");

use Libs\Database\UsersTable;
use Libs\Database\MySQL;
use Helpers\HTTP;
use Helpers\Auth;

$auth = Auth::check();


$id = $_GET['id'];

$table = new UsersTable(new MySQL);
$table->delete($id);

HTTP::redirect("/admin.php");