<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\AddPackage;
use App\Models\Test;
use App\Models\User;
use DB;
use Session;
use Hash;

use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcome()
    {
        $packages = Package::all();
        $addCartData = AddPackage::all();
        // $tests = Test::all();

        // dd($packages);
        return view('welcome', compact('packages', 'addCartData'));
    }

    public function viewPremium($id)
    {
        // dd($id);
        $fountPackage = Package::find($id);
        // dd($fountPackage);
        $packages = Package::all();

        if ($fountPackage) {
            session()->put('fountPackage', $fountPackage);

            $data = session()->get('fountPackage');
            // dd($data);

            $package = new AddPackage();
            $package->packages = $data['packages'];
            $package->include_test = $data['include_test'];
            $package->image = $data['image'];
            $package->charges = $data['charges'];
            $package->save();
        }
        return redirect()->back();
    }
    public function sessionRemoveCart(Request $request)
    {
        session()->flush();

        return redirect()->route('welcome');
    }

    public function guestDetail()
    {
        $addPackages = AddPackage::all();
        $packages = Package::all();
        $search = $request['search'] ?? '';
        return view('guest.guestDetail', compact('addPackages', 'search', 'packages'));
    }

    public function cartCheckout(Request $request)
    {
        if(Auth::check()){
            // dd('gggg'); 
            // $cartResult = session()->get('array');
            // $data = session()->get('fountPackage');
        $cartResult = session()->get('array1');

            // dd($cartResult);
            foreach ($cartResult as $item) {
                // dd($test);
                $data = DB::table('_orders')->insert([
                    'name' => Auth::user()->name,
                    'user_id' => Auth::user()->id,
                    'address' => Auth::user()->address,
                    'phone' => Auth::user()->phone,
                    'email' => Auth::user()->email,
    
                    'pincode' => Auth::user()->pincode,
    
                    'packages' => $item['packages'],
                    'include_test' => $item['include_test'],
                    'charges' => $item['charges'],
                    'image' => $item['image'],
    
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                // dd($data);
                // dd($data);
                Session::forget('array1');

            }

            return redirect()->route('home');
        }

            else{
        $newUser = new User();

        $newUser->name = $request->name;
        $newUser->phone = $request->phone;
        $newUser->email = $request->email;
        $newUser->password =  Hash::make($request->phone);
        $newUser->address =  $request->address;
        $newUser->pincode =  $request->pincode;
        // dd($newUser);
        // dd($newUser);
        $newUser->save();

        // $data1 = DB::table('users')
        // ->select('id')
        // ->latest()
        // ->first();
        // dd($newUser);

        $user = User::latest()->limit(1);

        $cartResult = session()->get('array');
        // dd($cartResult);

        // dd($cartResult);

        foreach ($cartResult as $item) {
            // dd($test);
            $data = DB::table('_orders')->insert([
                'name' => $request->name,
                'user_id' => $newUser->id,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,

                'pincode' => $request->pincode,

                'packages' => $item['packages'],
                'include_test' => $item['include_test'],
                'charges' => $item['charges'],
                'image' => $item['image'],

                'created_at' => now(),
                'updated_at' => now(),
            ]);
            // dd($data);
            // dd($data);
        }
        // dd($data);

        Session::forget('array');

        return redirect()->route('invoice');
    }
    }

    public function cartView()
    {
        return view('guest.cartView');
    }
    public function userDetail($id)
    {
        // $id = Auth::user()->id;
        $package = Package::find($id);
        $addCartData = AddPackage::where('user_id', $id)->get();

        return view('detail', compact('package', 'addCartData'));
    }

    public function sessionData(Request $request)
    {
        //set session variable
        if(Auth::check()){
        $request->session()->push('array1', [
            'packages' => $request->packages,
            'include_test' => $request->include_test,

            'charges' => $request->charges,

            'image' => $request->image,

            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);
        return redirect()->back();
    }else{
        $request->session()->push('array', [
            'packages' => $request->packages,
            'include_test' => $request->include_test,

            'charges' => $request->charges,

            'image' => $request->image,

            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);
        return redirect()->back();
    }
        // $data = $request->session()->get('array');
        // dd($data);user

      
    }

    public function veinCentres()
    {
        return view('veinCenter');
    }

    public function about()
    {
        return view('about');
    }

    public function facilities()
    {
        return view('facilities');
    }
    public function contact()
    {
        return view('contact');
    }
    public function assurance()
    {
        return view('assurance');
    }
    public function hospital()
    {
        return view('hospital');
    }
    public function expertise()
    {
        return view('expertise');
    }

    // public function searchtest(Request $request)
    // {
    //     // dd($request);

    //     // $search = $request['search']??"";
    //     // if($search !="") {
    //     //     $packages = Package::where('test_name','LIKE',$search)->get();

    //     // return view('search',compact('packages'));
    //     // } else {
    //     //     return redirect()->back();
    //     // }
    //     if($request->search){
    //         $searchtest=Package::where('packages','test_name','LIKE','%'.$request->search.'%')->latest();

    //         return view('search',compact('searchtest'));
    //     }else{
    //         return redirect()->back();
    //     }

    //     // $search_text = $_GET['query'];
    //     // $packages = Package::where('test_name','LIKE', '%'.$search_text.'%')->get();
    // }
    public function search(Request $req)
    {
        // return $req->input('query');
        $packages = Package::where('packages', 'LIKE', '%' . $req->input('query') . '%')
            ->orWhere('test_name', 'LIKE', '%' . $req->input('query') . '%')

            // orWhere('LOWER(test_name)','LIKE', '%'.$req->strtolower('query').'%')

            ->get();
        $tests = Test::where('tests', 'LIKE', '%' . $req->input('query') . '%')
            ->orWhere('tests', 'LIKE', '%' . $req->input('query') . '%')

            // orWhere('LOWER(test_name)','LIKE', '%'.$req->strtolower('query').'%')

            ->get();
        // dd($tests);

        // $packages = Package::
        // whereRaw("test_name","LIKE",'%'. $req->input('query').'%')

        // ->orWhereRaw("test_name","LIKE",'%'. $req->input('query').'%')->pluck('test_name');
        return view('search', ['searchtest' => $packages], ['tests' => $tests]);
    }
    public function searchview($id)
    {
        // dd($id);
        
        $tests = Test::find($id);
        return view('searchview', compact('tests'));
    }
  


    //     public function invoice()
    //     {

    //         // $pdf = Pdf::loadView('admin.guest.invoice');
    //         // return $pdf->download('vein_invoice.pdf');
    //         Session::forget('array');
    //         $users = DB::select('select * from users');
    // return view('guest.invoice',['users'=>$users]);
    //         // return view("guest.invoice");
    //     }

    public function invoice()
    {
        // return view('guest.invoice');

        // $user_id = Auth::user();
        // $category = Category::all();
        //  $brands = Brand::paginate(6);         $brands_header = Brand::all();
        // $order = Order::all();

        $data = DB::table('users')
            ->select('id')
            ->latest()
            ->first();
        // $data = auth()->id();
        // dd($data);

        // $user = DB::table('_orders')
        // ->select('*')
        // ->where('id', '=', $data)
        // ->get();
        // dd($user);

        foreach ($data as $datas) {
            $user = DB::table('_orders')
                ->select('*')
                ->where('user_id', '=', $datas)
                ->get();
            // dd($user);
        }
        // $datas = DB::table('_orders')
        //     ->select('*')
        //     ->get();
        // dd($user,$data);
        // dd($data);
        return view('guest.invoice', compact('user', 'datas'))->with('success', 'data success');
    }
}
