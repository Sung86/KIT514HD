<?php
define("HOST", "localhost", false);
define("USERNAME", "root", false);
define("PASSWORD", "", false);
define("DATABASE", "KIT514Demo", false);

class DBConfig{
  private $connection;

  public function __construct(){
    $this->connection = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if(mysqli_connect_errno()){
        printf("Connection failed: %s \n",mysqli_connect_errno());
        exit();
    }
  }

  public function get_connection(){
    return $this->connection;
  }
}