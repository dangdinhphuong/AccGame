<?php
namespace App\Controllers;
use Jenssegers\Blade\Blade;

class BaseController{
    protected function render($viewFile, $viewData = []){
        $blade = new Blade('./app/views', './storage');

        echo $blade->make($viewFile, $viewData)->render();
    }
    public function kt_login(){
        if(!isset($_SESSION['login'])){
            header("location:".BASE_URL."login");
        }    
    }
   static public function var_dump($a){
      echo"<pre>";
      var_dump($a);
      die;
    }

}


?>