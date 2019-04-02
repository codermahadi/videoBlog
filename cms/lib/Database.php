<?php
/**
 * Created by PhpStorm.
 * User: ADN
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

class Database
{
    private $host = HOST;
    private $user = USER;
    private $pass = PASS;
    private $dbname = DBNAME;
    public $pdo;

    public function __construct()
    {


        if (!isset($this->pdo)) {
            try {
                $link = new PDO("mysql:host=".$this->host."; dbname=". $this->dbname, $this->user, $this->pass);
                $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $link->exec("SET CHARACTER SET utf8");
                $this->pdo = $link;
            } catch (PDOException $e) {
                die("Failed to connect with database" . $e->getMessage());
            }
        }
    }

}