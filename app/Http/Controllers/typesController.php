<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Type;
use App\User;
use App\Product;




class typesController extends Controller
{
    public function types()
    {
        $types = DB::table('types')->get();
        return view('admin.types', compact('types'));
    }
    public function index()
    {
        $users = DB::table('users')->count();
        $products = DB::table('products')->count();

        return view('admin.index', compact('users', 'products'));
    }
    public function users()
    {
        $users = DB::table('users')->get();

        return view('admin.users', compact('users'));
    }
    public function profile($id)
    {
        $user = User::find($id);
       

        return view('admin.profile', compact('user'));
    }
    public function allproducts()
    {
        $products =\App\Product::with('producttype')->get();
        return view('admin.allproducts', compact('products'));


    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:50',
        ]);

        $types = new Type();
        $types->name = $request->name;
        $types->save();

        return redirect('/types')->with('status', 'types was created ! ');
    }
    public function destroy($id)
    {
        $type = Type::find($id);
        $type->delete();
        $product = product::where('typeId',$id);
        $product->delete();
         return redirect('/types')->with('status', 'type deleted ! ');
    }
    
   
}