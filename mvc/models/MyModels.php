<?php
class MyModels extends Database
{
    private $connect;

    public function __construct()
    {
        $this->connect = $this->connect();
    }

    public function query($sql)
    {
        return sqlsrv_query($this->connect, $sql);
    }

    public function getdata($data = ["*"])
    {
        $data = implode(",", $data);
        $sql = "SELECT ".$data." FROM " .$this->table;
        $result = $this->query($sql);
        $kq = [];
        if($result)
        {
            while ($row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC))
            {
                $kq[] = $row;
            }
            if($kq)
            {
                return $kq;
            }
            else
            {
                return null;
            }
        }
        else
        {
            return null;
        }
    }

    public function add($data)
    {
        $keys = array_keys($data);
        $keys = implode(",", $keys);
        $newValues = array_map(function($value)
                               {
                                  return "'".$value."'";
                               }, array_values($data));
        $newValues = implode(",", $newValues);
        $sql = "INSERT INTO $this->table ($keys) VALUES ($newValues)";
        $this->query($sql);
    }

    public function update($data = NULL, $where = NULL)
    {
        $keys_data = array_keys($data);
        $newValues_data = array_map(function($value)
                               {
                                  return "'".$value."'";
                               }, array_values($data));
        $tmp1 = true;
        $data_sql = "";
        for($i = 0; $i < count($keys_data); $i++)
        {
            if($tmp1)
            {
                $data_sql .= "$keys_data[$i]"." = "."$newValues_data[$i]";
                $tmp1 = false;
            }
            else
            {
                $data_sql .=", ". "$keys_data[$i]"." = "."$newValues_data[$i]";
            }
        }
        $keys = array_keys($where);
        $newValues = array_map(function($value)
                               {
                                  return "'".$value."'";
                               }, array_values($where));
        $tmp2 = true;
        $where_sql = "";
        for($i = 0; $i < count($keys); $i++)
        {
            if($tmp2)
            {
                $where_sql .= "$keys[$i]"." = "."$newValues[$i]";
                $tmp2 = false;
            }
            else
            {
                $where_sql .=" and ". "$keys[$i]"." = "."$newValues[$i]";
            }
        }
        $sql = "UPDATE $this->table SET $data_sql WHERE $where_sql";
        echo $sql;
        $this->query($sql);
    }

    public function findSingle($select = ["*"], $where = NULL)
    {
        $select = implode(",",$select);
        $keys = array_keys($where);
        $newValues = array_map(function($value)
                               {
                                  return "'".$value."'";
                               }, array_values($where));
        $tmp = true;
        $where_sql = "";
        for($i = 0; $i < count($keys); $i++)
        {
            if($tmp)
            {
                $where_sql .= "$keys[$i]"." = "."$newValues[$i]";
                $tmp = false;
            }
            else
            {
                $where_sql .=" and ". "$keys[$i]"." = "."$newValues[$i]";
            }
        }
        $sql = "SELECT $select FROM $this->table WHERE $where_sql";
        $result = $this->query($sql);
        return sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);
    }

    public function findAll($select = ["*"], $where = NULL)
    {
        $select = implode(",",$select);
        $keys = array_keys($where);
        $newValues = array_map(function($value)
                               {
                                  return "'".$value."'";
                               }, array_values($where));
        $tmp = true;
        $where_sql = "";
        for($i = 0; $i < count($keys); $i++)
        {
            if($tmp)
            {
                $where_sql .= "$keys[$i]"." = "."$newValues[$i]";
                $tmp = false;
            }
            else
            {
                $where_sql .=" and ". "$keys[$i]"." = "."$newValues[$i]";
            }
        }
        $sql = "SELECT $select FROM $this->table WHERE $where_sql";
        $result = $this->query($sql);
        while ($row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC))
        {
            $kq[] = $row;
        }
        return $kq;
    }
}
?>