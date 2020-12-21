<?php

require(dirname(__FILE__) . '/dbClass.php');

class crudClass extends DBConn
{
    public $stmt;
    public $new_result = array();

    function jova_query($is_single, $sql, $bind_param, $is_select)
    {
        $this->stmt = $this->conn->prepare($sql);
        if ($is_single) {
            $this->stmt->execute([$bind_param]);
        } else {
            $this->stmt->execute();
        }
        if ($is_select) {
            while ($result = $this->stmt->fetch(PDO::FETCH_ASSOC)) {
                $this->new_result[] = $result;
            }
            return $this->new_result;
        }
    }
}
$callCrud = new crudClass();
