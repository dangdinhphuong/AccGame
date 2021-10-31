<?php
namespace App\Controllers;

use App\Models\User;

class LoginController extends BaseController{

    public function index(){



        $this->render('login.login');
    }
    public function postLogin(){
        if(isset($_POST) && !empty($_POST['email']) && !empty($_POST['password'])){
            $email= $_POST['email'];
            $password= $_POST['password'];
            $email_data=User::where('email',$email)->first();
            if($email_data != false){
                if(password_verify($password,$email_data->password)){
                    $_SESSION[AUTH] = [
                        'id' => $email_data->id,
                        'name' => $email_data->name,
                        'email' => $email_data->email,
                        'role' => $email_data->role
                    ];
                    header('location:'.BASE_URL.'new-cate');
                }
                else{

                    header('location:'.BASE_URL.'login?messenger=mật khẩu không chính xác');

                }
            }
            else{
                header('location:'.BASE_URL.'login?messenger=tài khaon không đúng');
                die;

            }
            echo password_verify($password,$email_data->password);
            LoginController::var_dump($email_data->password);
        }


        $this->render('login.login');
    }
}
