<?php


namespace Main\Model;
use Main\DB\Sql;

class User
{
    public function __construct()
    {
        echo '<p>Model User</p>';
    }

    public static function listAll()
    {
        $sql = new Sql();
        $query = "select * from tb_users 
            join tb_persons on tb_persons.idperson = tb_users.idperson
            order by tb_users.dtregister;";
        $result = $sql->select($query);
        return $result;

    } // fim method
}