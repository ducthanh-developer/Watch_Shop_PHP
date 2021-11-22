<?php
class Connect
{
    private $host = 'localhost';
    private $dbname = 'watch_db';
    private $username = 'root';
    private $password = '';
    private $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    private $DBH = '';
    private $sql;
    function __construct()
    {
        $this->DBH = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password, $this->options);
    }

    function setQuery($_sql)
    {
        $this->sql = $_sql;
    }

    function getList($_sql)
    {
        $this->setQuery($_sql);
        return $this->DBH->query($this->sql);
    }
    function getInstance($_sql)
    {
        $this->setQuery($_sql);
        return $this->DBH->query($this->sql)->fetch(PDO::FETCH_ASSOC);
    }

    function execute($_sql)
    {
        $this->setQuery($_sql);
        return $this->DBH->exec($this->sql);
    }

    function lastInsertID(){
        return $this -> DBH -> lastInsertId();
    }
}
