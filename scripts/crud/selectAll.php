<?php

include(dirname(__FILE__, 2) . "/crudClass.php");

$select_sql = "SELECT * FROM `todoList`";

$jova_select_all = $callCrud->jova_query(false, $select_sql, false, true);

echo json_encode($jova_select_all);
