<?php
session_start();

class UserModel {
  private $mysqli;
  private $table = "Users";

  public function __construct(){
    if(!$this->mysqli){
      require_once('DBConfig.php');
      $db_config = new DBConfig();
      $this->mysqli = $db_config->get_connection();
    }
    
  }

  public function login($email, $password){
    $query = 'select * from '.$this->table.' where email="'.$email.'" and password="'.$password.'";';
    $result = mysqli_query($this->mysqli, $query);

    $selected = [];
    if(mysqli_num_rows($result) > 0){
      $selected =  mysqli_fetch_assoc($result);
      $_SESSION['user'] = $selected;
      unset($_SESSION['login_error']);
    }else{
      $_SESSION['login_error'] = "Invalid Account";
    }
    mysqli_free_result($result);
    mysqli_close($this->mysqli);
    return $selected;
  } 
}