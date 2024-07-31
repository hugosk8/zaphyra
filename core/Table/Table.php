<?php

namespace Core\Table;

use Core\Database\MsqlDatabase;

class Table
{
    protected $table;

    protected $db;

    public function __construct(MsqlDatabase $db)
    {

        $this->db = $db;

        if (is_null($this->table)) {
            $parts = explode('\\', get_class($this));

            $class_name = end($parts);

            $this->table = strtolower(str_replace('Table', '', $class_name) . 's');
        }
    }

    public function user($username)
    {
        return $this->query("SELECT * FROM users WHERE username = ?", [$username],  true);
    }

    public function all()
    {
        return $this->query('SELECT * FROM ' . $this->table);
    }

    public function find($id)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }


    public function update($id, $fields)
    {
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $k => $v) {
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(', ', $sql_parts);
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id = ?", $attributes, true);
    }

    public function delete($id)
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id], true);
    }

    public function SafeDelete($id)
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ? ON DELETE RESTRICT", [$id], true);
    }

    public function LightDelete($id)
    {
        date_default_timezone_set('Europe/Paris');
        $date =  ('d-m-y G:i:s');
        return $this->query("UPDATE {$this->table} SET deleted = {$date} WHERE id = ?", [$id], true);
    }

    public function create($fields)
    {
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $k => $v) {
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ', $sql_parts);
        var_dump($sql_part);
        return $this->query("INSERT INTO {$this->table} SET $sql_part", $attributes, true);
    }


    public function extract($key, $value)
    {
        $records = $this->all();
        $return = [];
        foreach ($records as $k => $v) {
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }

    public function query($statement, $attrubutes = null, $one = false)
    {
        if ($attrubutes) {
            return $this->db->prepare(
                $statement,
                $attrubutes,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        } else {
            return $this->db->query(
                $statement,
                str_replace(
                    'Table',
                    'Entity',
                    get_class($this),
                    $one
                )
            );
        }
    }
}
