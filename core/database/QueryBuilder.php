<?php

namespace core\database;

// include "pdo.file.php";
class QueryBuilder
{
    protected $pdo;
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function select($table, array $option)
    {
        $column = "*";
        if (isset($option['columns'])) {
            if (gettype($option['columns']) != "string") {
                $column = implode(",", $option['columns']);
            } else {
                $column = $option['columns'];
            }
        }
        if (isset($option['condition'])) {
            if (gettype($option['condition']) != "string") {
                foreach ($option['condition'] as $key => $value) {
                    $condition[] = "$key = '$value'";
                }
            } else {
                $condition[] = $option['condition'];
            }
            $where = implode(" AND ", $condition);
        }
        if (isset($option['contain'])) {
            foreach ($option['contain'] as $key => $value) {
                foreach ($value as $k => $v) {
                    $join[] = $v;
                }
            }
            $join = implode(" ", $join);
        }
        if (isset($column) && isset($join) && isset($where)) {
            $query = "SELECT $column FROM $table $join WHERE $where";
        } else if (isset($column) && isset($join)) {
            $query = "SELECT $column FROM $table $join";
        } else if (isset($column) && isset($where)) {
            $query = "SELECT $column FROM $table WHERE $where";
        } else {
            $query = "SELECT $column FROM $table";
        }
        try {
            if(isset($option['limit'])){
                $query = $query.$option['limit'];
            }
            $result = $this->pdo->query($query);
            return $result->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($table_name, $array)
    {
        $key = array_keys($array);
        $value = array_values($array);

        $val = implode("','", $value);
        $k = implode("`,`", $key);
        $query = "INSERT INTO `$table_name`(`$k`) VALUES ('$val')";

        // echo $query;
        // die();
        try {
            $this->pdo->query($query);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($table_name, $array, $column_name, $column_value)
    {
        foreach ($array as $key => $value) {
            $query = "UPDATE $table_name SET $key = $value WHERE $column_name=$column_value";
            try {
                $this->pdo->query($query);
            } catch (\Exception $e) {
                die($e->getMessage());
            }
        }
    }

    public function delete($table, $column, $user_id)
    {
        $query = "DELETE FROM $table WHERE $column = $user_id";
        try {
            $this->pdo->query($query);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}