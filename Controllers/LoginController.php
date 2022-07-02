<?php
if(isset($_POST['loginBtn'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $login_controller = new LoginController($email, $password);
  $login_controller->execute();
}

class LoginController {
  private $email;
  private $password;
  private $userModel; 

  public function __construct($login_email, $login_password){
    $this->email = $login_email;
    $this->password = $login_password;

    if(!$this->userModel){
      require_once('../Models/UsersModel.php');
      $this->userModel = new UserModel();
    }
  }
  
  public function execute(){
    $user_data = $this->userModel->login($this->email, $this->password);
    if(count($user_data) > 0){
      $redirect_url = "/KIT514 Demo/Views/HomeView.php";
    }
    else{
      $redirect_url = "/KIT514 Demo/Views/LoginView.php";
    }
    header('Location: '.$redirect_url);

  }
}
