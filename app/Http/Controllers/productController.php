<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Product;
use App\Type;
use DB;
use App\Quotation;




class productController extends Controller
{

    public function global()
    {
        $updated = DB::table('products')->get();

        return view('global', compact('updated'));
    }
    public function insert()
    {
        $product = DB::table('types')->get();
        return view('admin.insert', compact('product'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:50',
            'type' => 'required|max:200',
            'avilableNum' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:1999',
            'description' => 'required',
            'price' => 'required|max:11 '
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $exe = $file->getClientOriginalExtension();
            $filename =   'images_' . time() . '.' . $exe;
            $file->storeAs('public/img/products', $filename);
        } else {
            $filename = 'no-image.png';
        }
        $product = new Product();
        $product->name = $request->name;
        $product->typeId = $request->type;
        $product->avilableNum = $request->avilableNum;
        $product->price = $request->price;
        $product->image = $filename;
        $product->description = $request->description;
        $product->user_id = auth()->user()->id;

        $product->save();
        return redirect('/global')->with('status', 'posts was created ! ');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $type = DB::table('types')->get();
        return view('admin.edit', compact('product', 'type'));
    }
    
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $request->validate([
            'name' => 'required|max:50',
            'type' => 'required|max:200',
            'avilableNum' => 'required',
            'description' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $exe = $file->getClientOriginalExtension();
            $filename =   'images_' . time() . '.' . $exe;
            $file->storeAs('public/img', $filename);
        } else {
            $filename = $product->image;
        }
        $product->name = $request->name;
        $product->typeId = $request->type;
        $product->avilableNum = $request->avilableNum;
        $product->image = $filename;

        $product->description = $request->description;
        $product->user_id = auth()->user()->id;

        $product->save();

        $product->save();
        return redirect('/global')->with('status', 'posts was updated ! ');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/global')->with('status', 'posts was deleted ! ');
    }
    public function moreproduct()
    {
        $products = DB::table('products')->get();

        return view('taps.product',compact('products'));
    }
    
    public function singleproduct($id)
    {
        // $product = Product::find($id);
        $product =\App\Product::with('productuser')->with('producttype')->find($id);


        return view('taps.singleproduct',compact('product'));
    }
    public function typesproducts($id)
    {
        $product = Product::where('typeId',$id)->get();
        return view('taps.typesproducts',compact('product'));

    }
    
    
    public function userprofile($id)
    {
        $user = User::find($id);
       

        return view('taps.profile', compact('user'));
    }
}
