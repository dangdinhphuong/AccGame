<?php

use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use App\Controllers\LoginController;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
$router = new RouteCollector();

# định nghĩa filter
$router->filter('auth', function(){
    if(!isset($_SESSION[AUTH]) || empty($_SESSION[AUTH])){
        header('location: ' . BASE_URL . 'login');
        die;
    }
});

# kết thúc định nghĩa filter
$router->group(['prefix'=>'admin'],function ($router){
    $router->get('/', [HomeController::class, "index"]);
// Route có áp dụng filter auth được định nghĩa ở phía trên
    $router->get('/new-cate', [CategoryController::class, "addNew"], ['before' => 'auth']);
    $router->get('/pro', [ProductController::class, "index"]);

// tham số tùy chọn: {name}?
// tham số bắt buộc: {id}
    $router->get('/thong-tin-san-pham/{id}', [ProductController::class, "detail"]);

# Authenticate
    $router->any('/logout', [HomeController::class, "logout"]);
    $router->get('/login', [LoginController::class, 'index']);
    $router->post('/post-login', [LoginController::class, 'postLogin']);

});
$router->get('/error-404', function(){
    return "đường dẫn không tồn tại";
});
# End Authenticate



$dispatcher = new Dispatcher($router->getData());
try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
}catch(HttpRouteNotFoundException $ex){
    header('location: ' . BASE_URL . 'error-404');
    die;
}

// Print out the value returned from the dispatched function
echo $response;

?>