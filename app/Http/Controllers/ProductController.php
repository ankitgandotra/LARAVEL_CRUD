<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Models\Product;
class ProductController extends Controller
{ //
    public function index(){
        return view('products.index');
    }
    public function create(){
        return view('products.create');
    }
    
    public function store(Request $request){
       // dd($request->all());
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->role = $request->role;
     //   dd($product->role);
        $product->save();
        dd($product);
      //  echo "heloooooooo";
        return back();

        
    }
}
