<?php

class Dbh{
  private $host = "remotemysql.com";
  private $user = "OXy65Ny57j";
  private $pwd = "eYArF8fOJw";
  private $dbName = "OXy65Ny57j";

  protected function connect(){
    $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
    $pdo = new PDO($dsn, $this->user,$this->pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}
