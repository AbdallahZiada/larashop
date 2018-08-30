<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;
use App\Category;
use App\product;
use App\post;
use App\Http\Requests;

class Front extends Controller {

    var $categories;
    var $brands;
    var $title;
    var $products;
    var $description;

    public function __construct(){
        $this->brands = Brand::all(array('name'));
        $this->categories = Category::all(array('name'));
        $this->products = product::all(array('id','name','price'));
    }

    public function index() {
        return view('home', array('title'=>'welcome','describtion'=>'','page' => 'home','brands'=>$this->brands,'categories'=>$this->categories,'products'=>$this->products));
    }

    public function products() {
        return view('products', array('title'=>'Products Listing','description'=>'','page' => 'products' , 'brands'=>$this->brands,'categories'=>$this->categories,'products'=>$this->products));
    }

    public function product_details($id) {
        return view('product_details', array('title'=>'welcome','describtion'=>'','page' => 'products', 'brands'=>$this->brands,'categories'=>$this->categories,'products'=>$this->products));
    }

    public function product_categories($name) {
        return view('products', array('title'=>'welcome','describtion'=>'','page' => 'products' , 'brands'=>$this->brands,'categories'=>$this->categories,'products'=>$this->products));
    }

    public function product_brands($name, $category = null) {
        return view('products', array('title'=>'welcome','describtion'=>'','page' => 'products' , 'brands'=>$this->brands,'categories'=>$this->categories,'products'=>$this->products));
    }

    public function blog() {
        return view('blog', array('title'=>'welcome','describtion'=>'','page' => 'blog' , 'brands'=>$this->brands,'categories'=>$this->categories,'products'=>$this->products));
    }

    public function blog_post($id) {
        return view('blog_post', array('title'=>'welcome','describtion'=>'','page' => 'blog' ,   'brands'=>$this->brands,'categories'=>$this->categories,'products'=>$this->products));
    }

    public function contact_us() {
        return view('contact_us', array('title'=>'welcome','describtion'=>'','page' => 'contact_us'));
    }

    public function login(Request $request) {
        return view('login', array('title'=>'welcome','describtion'=>'','page' => 'login'));
    }
/*
    // public function checkLogin(Request $request)
    // {
    //     if($request->isMethod('post'))
    //     {
    //         $userName = Request::find("username");
    //         $email = Request::find("email");
    //         User::add(['name' => $userName , ]);
    //     }
    // }

    // public function checkSignUp(Request $request)
    // {
    //     if($request->isMethod('post'))
    //     {
    //         $userName = Request::find("username");
    //         $email = Request::find("email");
    //         $password = Request::find("password");
    //         User::add(['name' => $userName , 'email' => $email , 'password' => $pasword]);
    //     }
    //     $add = new User;
    //     $add->name = request('username');
    //     $add->email = request('email');
    //     $add->password = request('password');
    //     $add->save();
    //     return back();
    //     }
*/
    public function logout() {
        return view('login', array('title'=>'welcome','describtion'=>'','page' => 'logout'));
    }

    public  function cartAdd(Request $request) {
        if ($request->isMethod('post')) {
            $product_id = Request::get('product_id');
            $product    = product::find($product_id);
            Cart::add(array('id'=>$product_id,'name'=>$product->name,'qty'=>1,'price'=>$product->price));
        }

        $cart = Cart::content();

        return view('cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }

    public  function cartView() {
    
        return view('cart',['title'=>'welcome','cart'=>null]);
    }

    public function checkout() {
        return view('checkout', array('title'=>'welcome','describtion'=>'','page' => 'checkout'));
    }

    public function search($query) {
        return view('products', array('title'=>'welcome','describtion'=>'','page' => 'products'));
    }

}