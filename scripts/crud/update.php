<?php

include(dirname(__FILE__, 2) . "/crudClass.php");


$updateItemId = $_POST['updateItemId'];
$bind_param = $_POST['updateItem'];

$update_sql =  "UPDATE `todoList` SET `Item` = ? WHERE `todoList`.`id` = $updateItemId;";


$jova_insert = $callCrud->jova_query(true, $update_sql, $bind_param, false);
