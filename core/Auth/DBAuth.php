<?php

namespace Core\Auth;

use Core\Database\Database;
use Core\Table\Table;


class DBAuth
{

    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getUserId()
    {
        if ($this->logged()) {
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * @param $username
     * @param $password
     * @return boolean
     */
    public function login($username, $password)
    {
        $user = $this->db->prepare('SELECT * FROM users WHERE username = ?', [$username], null, true);
        if($user){
            if($user->password === sha1($password)){
                $_SESSION['auth'] = $user->id;
                $_SESSION['name'] = $user->firstname;
                return true;
            }
        }
        return false;
    }

    public function logged()
    {
        return isset($_SESSION['auth']);
    }
}
