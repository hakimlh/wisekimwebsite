<?php

namespace App\Http\Controllers;

use App\Product;
use App\Visitor;
use Illuminate\Http\Request;
// use BlockIoPhp\BlockIoPhp\Lib\BlockIo;
// use BlockIoPhp\BlockIoPhp\Lib\BlockKey;
use File;

class manage extends Controller
{
    private $counter = 1;

    public function AddProduct(Request $request){
      if($request->isMethod('post')){
        $myproduct = new Product();
        $myproduct->name=$request->input('name');
        $myproduct->type=$request->input('type');
        $file = Input::file('file');
        $fl='img/products/'.$file->getClientOriginalName();
        $file->move('img/products', $file->getClientOriginalName());
        $myproduct->img_url = $fl;
        $myproduct->save();
        // return redirect('product');
      }
      return view("manage.AddProduct");
    }

    public function ViewProducts(){
        $product = Product::all();
        $arr = array('product' => $product );
        return view('index',$arr);
    }

    public function visitors(){

        //Usage
//         File::put($path,$contents);
//         Example
//         $this->counter = $this->counter + 1;
//         File::put("mytextdocument.txt",$this->counter);

//         $contents = File::get("mytextdocument.txt");

        $mycounter = new Visitor();
        $mycounter->save();
        $product = Product::all();
        $arr = array('product' => $product );
        return view('index',$arr);

        // $mycounters = Visitor::count();

        // dd($mycounters);
    }

    public function ShowProfile(){
      return view("pages.Profile");
    }
}
