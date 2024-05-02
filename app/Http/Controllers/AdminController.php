<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\AddPackage;
use App\Models\Test;
use App\Models\Order;
use DB;

class AdminController extends Controller
{
    public function packagesIndex()
    {
        $packages = Package::all();
        return view('admin.packages.index',compact('packages'));
    }
    public function packagesCreate()
    {
        
        return view('admin.packages.create');
    }

    public function packagesStore(Request $request)
    {

        // dd($request);
        $packages = new Package;
        $packages->packages=$request->packages;
        $packages->include_test=$request->include_test;
        $packages->image=$request->image;
        $packages->charges=$request->charges;
        $packages['test_name']=$request->input('test_name');
        // dd($packages);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/package'), $filename);
            $packages->image = $request->file('image')->getClientOriginalName();
        }
        $packages->save();

        return redirect()->route('admin.packages.index')->with('msg','Data Addedd Successfully');

  
    }

    public function cartIndex()
    {
        $cartItems = Package::all();
        // dd($cartItems);
        return view('admin.packages.viewAllCart', compact('cartItems'));
    }

    public function productDelete($id)
    {
        $products = Package::find($id);
        // dd($products);
        $products->delete();
        return redirect()
            ->back()
            ->with('success', 'Cart Delete Successfully');
    }



    public function packagesEdit($id)
    {
        $packages = Package::find($id);
        return view('admin.packages.edit',compact('packages'));
    }

    public function packagesUpdate(Request $request,$id)
    {
        $packages = Package::find($id);
        $packages->packages=$request->packages;
        $packages->include_test=$request->include_test;
        $packages->image=$request->image;
        $packages->charges=$request->charges;
        $packages['test_name']=$request->input('test_name');


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/package'), $filename);
            $packages->image = $request->file('image')->getClientOriginalName();
        }
        $packages->save();

        return redirect()->route('admin.packages.index')->with('msg','Data Update Successfully');
    }
    public function packagesDelete($id)
    {
        $packages = Package::find($id);
        $packages->delete();
        return redirect()->route('admin.packages.index')->with('msg','Data delete Successfully');
    }



    public function testsIndex()
    {
        $tests = Test::all();
        return view('admin.tests.index',compact('tests'));
    }

    public function testsCreate()
    {
        
        return view('admin.tests.create');
    }
   

    public function testsStore(Request $request)
    {

        // dd($request);
        $tests = new Test;
        $tests->tests=$request->tests;
        // $tests->include_test=$request->include_test;
        $tests->image=$request->image;
        $tests->charges=$request->charges;
        $tests->discount=$request->discount;
        $tests->description=$request->description;
        // $tests['test_name']=$request->input('test_name');
        // dd($packages);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('image1/test'), $filename);
            $tests->image = $request->file('image')->getClientOriginalName();
        }
        $tests->save();

        return redirect()->route('admin.tests.index')->with('msg','Data Addedd Successfully');

  
    }
    // public function Cart()
    // {
    //     $cartItems = Test::all();
    //     // dd($cartItems);
    //     return view('admin.tests.viewAllCart', compact('cartItems'));
    // }

    public function testsEdit($id)
    {
        $tests = Test::find($id);
        return view('admin.tests.edit',compact('tests'));
    }
    public function testsUpdate(Request $request,$id)
    {
        $tests = Test::find($id);
        $tests->tests=$request->tests;
        // $tests->include_test=$request->include_test;
        $tests->image=$request->image;
        $tests->charges=$request->charges;
        $tests->discount=$request->discount;
        $tests->description=$request->description;
        // $tests['test_name']=$request->input('test_name');


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('image1/test'), $filename);
            $tests->image = $request->file('image')->getClientOriginalName();
        }
        $tests->save();

        return redirect()->route('admin.tests.index')->with('msg','Data Update Successfully');
    }

    public function testsDelete($id)
    {
        $tests = Test::find($id);
        $tests->delete();
        return redirect()->route('admin.tests.index')->with('msg','Data delete Successfully');
    }
   

    public function testcartIndex()
    {
        $testcartItems = Test::all();
        // dd($cartItems);
        return view('admin.tests.viewAllCart', compact('testcartItems'));
    }
   
    public function testproductDelete($id)
    {
        $tests = Test::find($id);
        // dd($products);
        $tests->delete();
        return redirect()
            ->back()
            ->with('success', 'Cart Delete Successfully');
    }

// stored data to database with help of session

public function login() {
    // Authenticate the user
    if(!auth()->attempt(request([
        'email', 'name','address','phone','pincode'
    ]), true)) {
        return back()->withErrors(['message' => 'Incorrect email or password']);
    }
    
    // I think i should store the session to database here before returning to home page
    
    // Return home
    return redirect()->home();
}

// public function orderIndex(){
//     $orders = DB::_order::all();
//     return view('admin.order.index',compact('orders'));
// }

public function orderIndex(){
    // $orders = Order::all();
    $orders = Order::all()->unique('user_id');
    return view('admin.order.index',compact('orders'));
}

public function orderView($user_id)
{
        // dd($user_id);
        // $orderViews = Order::find($user_id);
        $orders = Order::select('*')->where('user_id','=',$user_id)->get();
        // dd($orderViews);
        return view('admin.order.view',compact('orders'));
}
}
