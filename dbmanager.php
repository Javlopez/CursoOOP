<?php
/**
 * Description of Dbmanager
 *
 * @author ajaxman
 */
class DbManager{

    private $_connection;

    static private $_tableName = '';

    public function getUser($user)
    {

        self::$_tableName = 'users';
        $select = 'select';
        $select .= ' id, name ';
        $select .= ' from ';
        $select .= self::$_tableName;
        if(!empty($where)){
            $where = self::_filterWhere($where);
            $select .= ' where username = "'.$where.'"';
        }
        //$query = mysql_query($select);
        return $select;
    }

    public function  __construct()
    {
        $this->connection();
    }

    static private function _filterWhere($where = '')
    {
        $where = addslashes($where);
        $where = trim($where);
        return $where;
        //return mysql_real_escape_string($unescaped_string, $link_identifier);
    }

    public function select($tableName = 'usersABC',$where = '')
    {
        self::$_tableName = $tableName;
        $select = 'select';
        $select .= ' id, name ';
        $select .= ' from ';
        $select .= self::$_tableName;
        if(!empty($where)){
            $where = self::_filterWhere($where);
            $select .= ' where username = "'.$where.'"';
        }
        //$query = mysql_query($select);
        return $select;
    }


    public function connection()
    {
        $this->_connection = mysql_connect(Dbconfig::HOST,
                                   Dbconfig::USER,
                                   Dbconfig::PASSWORD);
    }

}
?>
