<?php
class MyModels extends Database {
    private $conn;

    public function __construct() {
        $this->conn = $this->getConnection();
    }

    public function getdata($data = ["*"]) {
        $data = implode(",", $data);
        $sql = "SELECT ".$data." FROM " .$this->table;
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($data) {
        $keys = array_keys($data);
        $keys = implode(", ", $keys);
        $newValues = array_map(function($value) { return "'".$value."'"; }, array_values($data));
        $newValues = implode(", ", $newValues);
        $sql = "INSERT INTO $this->table ($keys) VALUES ($newValues)";
        $query = $this->conn->prepare($sql);
        if ($query->execute()) {
            return json_encode(
                array(
                    'type'      => 'sucessFully',
                    'Message'   => 'Insert data success',
                    'id'        => $this->conn->lastInsertId()
                )
            );
        } else {
            return json_encode(
                array(
                    'type'      => 'fails',
                    'Message'   => 'Insert data fails',
                )
            );
        }
    }

    public function update($data = NULL, $where = NULL) {
        $data_sql = $this->buildUpdateString($data);
        $where_sql = $this->buildWhereString($where);
        $sql = "UPDATE $this->table SET $data_sql WHERE $where_sql";
        $query = $this->conn->prepare($sql);
        if ($query->execute()) {
            return json_encode(
                array(
                    'type'      => 'sucessFully',
                    'Message'   => 'Update data success',
                )
            );
        } else {
            return json_encode(
                array(
                    'type'      => 'fail',
                    'Message'   => 'Update data fail',
                )
            );
        }
    }

    public function delete($where = NULL) {
        $where_sql = $this->buildWhereString($where);
        $sql = "DELETE FROM $this->table WHERE $where_sql";
        $query = $this->conn->prepare($sql);
        if ($query->execute()) {
            if ($query->rowCount() > 0) {
                return json_encode(
                    array(
                        'type'      => 'successfully',
                        'Message'   => 'Delete data success',
                    )
                );
            } else {
                return json_encode(
                    array(
                        'type'      => 'fail',
                        'Message'   => 'No data deleted',
                    )
                );
            }
        } else {
            return json_encode(
                array(
                    'type'      => 'fail',
                    'Message'   => 'Failed to execute query',
                )
            );
        }
    }

    public function deleteById($id) {
        $sql = "DELETE FROM $this->table WHERE ID = :id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        if ($query->execute()) {
            return json_encode(
                array(
                    'type'      => 'successfully',
                    'Message'   => 'Delete data success',
                )
            );
        } else {
            return json_encode(
                array(
                    'type'      => 'fail',
                    'Message'   => 'Failed to execute query',
                )
            );
        }
    }

    public function findSingle($id) {
        $sql = "SELECT * FROM $this->table WHERE ID = :id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        
        if ($query->execute()) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $count = count($result);
            if ($count == 1) {
                return json_encode(
                    array(
                        'type'      => 'success',
                        'data'      => $result[0],
                    )
                );
            } else {
                return json_encode(
                    array(
                        'type'      => 'fail',
                        'Message'   => ($count == 0) ? 'No data found' : 'Multiple records found',
                    )
                );
            }
        } else {
            return json_encode(
                array(
                    'type'      => 'fail',
                    'Message'   => 'Failed to execute query',
                )
            );
        }
    }

    public function findAll($select = NULL, $where = NULL, $orderBy = NULL, $order = "DESC") {
        $select = implode(",",$select);
        $where_sql = $this->buildWhereString($where);
        if($orderBy) {
            $sql = "SELECT $select FROM $this->table WHERE $where_sql ORDER BY $orderBy $order";
        } else {
            $sql = "SELECT $select FROM $this->table WHERE $where_sql";
        }
        echo $sql;
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    private function buildUpdateString($data) {
        $keys_data = array_keys($data);
        $newValues_data = array_map(function($value) { return "'".$value."'"; }, array_values($data));
        $updateArray = [];
        for($i = 0; $i < count($keys_data); $i++) {
            $updateArray[] = "$keys_data[$i] = $newValues_data[$i]";
        }
        return implode(", ", $updateArray);
    }

    private function buildWhereString($where) {
        if ($where) {
            $keys = array_keys($where);
            $newValues = array_map(function($value) { return "'".$value."'"; }, array_values($where));
            $whereArray = [];
            for($i = 0; $i < count($keys); $i++) {
                $whereArray[] = "$keys[$i] = $newValues[$i]";
            }
            return implode(" AND ", $whereArray);
        }
        return "1=1";
    }
}
?>