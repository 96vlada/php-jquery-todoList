<?php


include(dirname(__FILE__, 2) . "/crudClass.php");

$item_for_delete = $_POST['itemId'];

$delete_sql = "DELETE FROM `todoList` WHERE `todoList`.`id` = $item_for_delete";

$jova_delete = $callCrud->jova_query(false, $delete_sql, false, false);
