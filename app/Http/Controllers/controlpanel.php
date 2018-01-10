<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Product;




class controlpanel extends Controller
{
    public function dashboard(){

        return view('controlpanel.dashboard');
    }
    public function user(){

        return view('controlpanel.user');
    }
    public function table(){

        return view('controlpanel.table');
    }
    public function typography(){

        return view('controlpanel.typography');
    }
    public function icons(){

        return view('controlpanel.icons');
    }
    public function maps(){

        return view('controlpanel.maps');
    }
    public function notifications(){

        return view('controlpanel.notifications');
    }
    public function upgrade(){

        return view('controlpanel.upgrade');
    }

    public function Products(Request $request){

            if($request->isMethod('post'))
            {
    		      if(Input::hasFile('file'))
              {
                // dd($request->name,$request->type,$request->file);
                $myproduct = new Product();
                $myproduct->name=$request->name;
                $myproduct->type=$request->type;

          			$file = Input::file('file');
                $fl='img/products/'.$file->getClientOriginalName();

          			$file->move('img/products', $file->getClientOriginalName());
                $myproduct->img_url = $fl;
                $myproduct->save();

                $product = Product::all();
                $arr = array('product' => $product );
                return view('controlpanel.products',$arr);
          		}

          }
          if ($request->isMethod('get'))
          {
            $product = Product::all();
            $arr = array('product' => $product );
            return view('controlpanel.products',$arr);
          }

  	}
    public function removeProduct(Request $request,$id){

        $product = Product::find($id);
        $product->delete();
        return redirect('products');
    }

    public function deleteall() {

      $checked = Request::input('checked',[]);
      Todo::whereIn("id",$checked)->delete();

}
    public function editProduct(Request $request,$id){


        if($request->isMethod('post'))
        {
          $myproduct =  Product::find($id);
          $myproduct->name=$request->name;
          $myproduct->type=$request->type;

          if(Input::hasFile('file'))
          {
            $file = Input::file('file');
            $fl='img/products/'.$file->getClientOriginalName();

            $file->move('img/products', $file->getClientOriginalName());
            $myproduct->img_url = $fl;

          }
          $myproduct->save();
          //
          // $product = Product::all();
          // $arr = array('product' => $product );
          // return view('controlpanel.products',$arr);
          return redirect('products');

      }
      else {
        $product = Product::find($id);
        $arr = array('product' => $product );
        // dd($product->img_url);

        return view('controlpanel.editproduct',$arr);

      }
    }
}
