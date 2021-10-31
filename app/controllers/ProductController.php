<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController{

    public function index(){
        $products = Product::all();
        $products->load('category');
        BaseController::var_dump($products);
        $this->render('product.index', ['products' => $products]);
    }
    public function detail($id){
        
        $product = Product::find($id);
        $product->load('category');
        print_r($product);
    }
}

?>