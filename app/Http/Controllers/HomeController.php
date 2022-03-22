<?php

namespace App\Http\Controllers;

use App\Models\Breakfast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Lunch;
use App\Models\Dinner;


class HomeController extends Controller
{
    public function index(){

        $food = Food::all();
        $cook = Chef::all();
        $breakfast = Breakfast::all()->sortDesc();
        $lunch = Lunch::all();
        $dinner = Dinner::all();

        $user_id = Auth::id();

        $cart = Cart::where('user_id',$user_id)->count();

        return view('home', compact('food','cook','cart','breakfast','lunch','dinner'));
    }


    public function admins(){
        $food = Food::all();
        $cook = Chef::all();
        $cart = Cart::all();
        $breakfast = Breakfast::all();
        $lunch = Lunch::all();
        $dinner = Dinner::all();
        
        $usertype = Auth::user()->user_type;

        if(!$usertype == "1"){
            return redirect("/");
        }

        return view('admin.adminhome',compact('food','cook','cart','breakfast','lunch','dinner'));

        // else{

        //     $user_id = Auth::id();

        //     $breakfast = Breakfast::all();
        //     $lunch = Lunch::all();
        //     $dinner = Dinner::all();
        //     $cart = Cart::where('user_id',$user_id)->count();

        //     return view('home', compact('food','cook','cart','breakfast','lunch','dinner'));
        // }


    }

    public function addtocart(Request $request, $id){

        if(Auth::id()){

        $user_id = Auth::id();

        $food_id = $id;

        $quantity = $request->quantity;

        $cart = Cart::create([
            'user_id'  => $user_id,
            'food_id'  => $food_id,
            'quantity' => $request->quantity
        ]);

        return redirect()->back();

        } else {

        return redirect('/login');

        }

    }

    public function showcart(Request $request, $id){

        if(Auth::id() == $id){

            $count = Cart::where('user_id',$id)->count();

           $cartdata = Food::join('carts','carts.food_id','=','food.id')->where('carts.user_id','=',$id)->get();

            return view('showcart',compact('count','cartdata'));
        }else{

            return back();
        }
    }


    public function remove($id){

        $data = Cart::find($id);

        $data->delete();

        return back();

    }


    public function reserve(){

        $food = Food::all();
        $cook = Chef::all();

        $user_id = Auth::id();

        $cart = Cart::where('user_id',$user_id)->count();

        return view('reserve', compact('food','cook','cart'));

    }

    public function confirmorder(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);


        foreach($request->foodname as $key => $value){

            Order::create([
              'foodname' => $value,
              'price' => $request->price[$key],
              'quantity' => $request->quantity[$key],
              'name' => $request->name,
              'phone' => $request->phone,
              'address' => $request->address
            ]);

        }
        
        return back();

    }


}
