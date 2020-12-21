<?php


include(dirname(__FILE__, 2) . "/crudClass.php");

$insert_sql = "INSERT INTO `todoList` (`id`, `Item`) VALUES (NULL, ?)";
$bind_param = $_POST['insertVal'];

$jova_insert = $callCrud->jova_query(true, $insert_sql, $bind_param, false);
