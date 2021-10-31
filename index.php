<?php
session_start();
$url = isset($_GET['url']) == true
    ? $_GET['url'] : "/";

require_once './commons/utils.php';
require_once './vendor/autoload.php';
require_once './config/database.php';
require_once './commons/router.php';
//var_dump(password_hash("123456",PASSWORD_DEFAULT));echo"<br>";
//var_dump(password_hash("123456",PASSWORD_DEFAULT));
//die;
// composer require illuminate/database
// composer require illuminate/events



//switch ($url) {
//    case "/":
//        $ctr = new HomeController();
//        $ctr->index();
//        break;
//    case "san-pham":
//        $ctr = new ProductController();
//        checkAUTH();
//        $ctr->index();
//        break;
//    case "login":
//        $ctr = new LoginController();
//        $ctr->index();
//        break;
//    case "post-login":
//        $ctr = new HomeController();
//        $ctr->postLogin();
//        break;
//    case "logout":
//        $ctr = new HomeController();
//        $ctr->logout();
//        break;
//    case "new-cate":
//        $ctr = new CategoryController();
//        $ctr->addNew();
//        break;
//    case "save-cate":
//        $ctr = new CategoryController();
//        $ctr->saveCate();
//        break;
//    case "edit-cate":
//        $ctr = new CategoryController();
//        $ctr->editCate();
//        break;
//    case "save-edit-cate":
//        $ctr = new CategoryController();
//        $ctr->saveEdit();
//        break;
//    case "remove-cate":
//        $ctr = new CategoryController();
//        $ctr->removeCate();
//        break;
//    default:
//        echo "Not found!";
//        break;
//}
