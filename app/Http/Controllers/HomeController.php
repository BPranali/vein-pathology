<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\AddPackage;
use App\Models\User;
use App\Models\Test;
use App\Models\Order;
use Session;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            // dd($id);

            // dd($cartItems);
            $addCartData = AddPackage::where('user_id', $id)->get();

            $packages = Package::all();
            return view('home', compact('packages', 'id', 'addCartData'));
        }
        else{
            $cartResult = session()->get('array');
        Session::forget('array');
            $packages = Package::all();
            return view('home', compact('packages', 'id', 'addCartData'));
        }
    }

    public function nav($user_id)
    {

     if (Auth::id()) {
            $id = Auth::user()->id;

            // dd($id);
            // $orders = Order::all();
            $orders = Order::find($user_id);
            $addCartData = AddPackage::where('user_id', $id)->get();
            // dd($addCartData);
            // dd($orders);

            return view('include.navbar', compact('addCartData, orders'));
        }
        else{
            $packages = Package::all();
            $addCartData = AddPackage::where('user_id', $id)->get();
            return view('include.navbar', compact('packages', 'id', 'addCartData'));
        }
       
    }

    public function adminHome()
    {
        return view('adminHome');
    }

    //for cart icon
    public function cartView()
    {

        $cartResult = session()->get('array');
        Session::forget('array');
        if (Auth::id()) {

            $id = Auth::user()->id;

            // dd($id);
            $orders = Order::all();
            $addCartData = AddPackage::where('user_id', $id)->get();
            // dd($addCartData);
           
            return view('guest.cartView', compact('addCartData','orders'));

        }
        else{
            $packages = Package::all();
            return view('home', compact('packages', 'id', 'addCartData'));
        }
    }

    public function removeCart($id)
    {
        $carts = AddPackage::find($id);
        // dd($carts);
        $carts->delete();
        return redirect()->back();
    }

    public function productDetail(Request $request, $id)
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            // dd($id);

            // dd($cartItems);

            $newProduct = new AddPackage();
            $newProduct->user_id = $request->id;
            $newProduct->packages = $request->packages;
            $newProduct->include_test = $request->include_test;

            $newProduct->charges = $request->charges;

            $newProduct->image = $request->image;

            // $newProduct->save();

            $package = Package::find($id);
            return view('detail', compact('package', 'id', 'newProduct'));
        }
    }

    public function storeCart(Request $request, $id)
    {
        // dd($id);
        // dd($request);
        if (Auth::id()) {
            $id = Auth::user()->id;
            // dd($id);

            // dd($cartItems);

            $newProduct = new AddPackage();
            $newProduct->user_id = $request->id;
            $newProduct->packages = $request->packages;
            $newProduct->include_test = $request->include_test;

            $newProduct->charges = $request->charges;

            $newProduct->image = $request->image;
            // dd($newProduct);

            $newProduct->save();

            // $package = Package::find($id);
            return redirect()->route('welcome');
        }
    }

    public function addCart(Request $request, $id)
    {
        if (Auth::id()) {
            $newUser = new AddCard();
            $newUser->user_id = $request->id;
            $newUser->packages = $request->packages;
            $newUser->include_test = $request->include_test;

            $newUser->charges = $request->charges;

            $newUser->image = $request->image;
            // dd($newUser);
            $newUser->save();

            return redirect()->back();
        }
    }


    public function loginOrder(){
        // dd($user_id);
        // $orders = Order::all()->unique('user_id');
        $users = Auth::user()->id;
        
        $orders = Order::select('*')->where('user_id','=',$users)->get();
        // dd($orders);
        return view('order', compact('orders'));
    }
   

}
