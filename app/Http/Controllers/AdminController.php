<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use Illuminate\Http\RedirectResponse;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AdminController extends Controller
{

    public function users(){

        $users = User::all();

        return view('admin.users')->with('users', $users);

    }

    public function foodmenu(){

        $food = Food::paginate(4);

        $chef = Chef::all();

        return view('admin.foodspecial', compact('food','chef'));
    }


    public function deletemenu($id){

        $del = Food::find($id);

        $del->delete();

        return back()->with('status', "Menu deleted");

    }

    public function updatemenu($id){
        $food = Food::find($id);

        return view('admin.updateview',compact('food'));
    }

   

    public function update(Request $request, $id){

        if($request->hasFile('image')){

            $request->validate([
                'title' => 'required',
                'price' => 'required',
                'description' => 'required'
            ]);

            $image = $request->file('image');

            $filename = $image->getClientOriginalName();

            $filename_without_extention = pathinfo($filename, PATHINFO_FILENAME);

            $filenameExtension = $image->getClientOriginalExtension();

            $filename_to_store = time() . "-" . $filename_without_extention .".". $filenameExtension;

            $image->move('storage/image',$filename_to_store);
        
        //dd($filename_to_store);

        $request->user()->food()->where('id',$id)->update([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $filename_to_store,
            'description' => $request->description
        ]);

        }else{
            //No image is uploaded
            $request->user()->food()->where('id',$id)->update([
                'user_id' => $request->user()->id,
                'title' => $request->title,
                'price' => $request->price,
                'description' => $request->description
            ]);

        }
            return redirect()->back()->with('status', 'Menu updated!');
            
    }


    public function foodstore(Request $request){

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg, png, jfif, jpg, avif',
            'description' => 'required'
            
        ]);

        if($request->hasFile('image')){

            $food = Food::all();

            $image = $request->file('image');

            $filename = $image->getClientOriginalName();

            $filename_without_extention = pathinfo($filename, PATHINFO_FILENAME);

            $filenameExtension = $image->getClientOriginalExtension();

            $filename_to_store = time() . "-" . $filename_without_extention .".". $filenameExtension;

            $image->move('storage/image',$filename_to_store);
        

     
        //dd($filename_to_store);



        $request->user()->food()->create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $filename_to_store,
            'description' => $request->description
        ]);

        }
            return redirect()->back()->with('status', 'Dish created successfully!');
            
    }

    public function destroy($id){

        $user = User::find($id);

        $user->delete();

        return back();

    }

    public function createchef(){
        return view('admin.adminchef');
    }

    public function storechef(Request $request){
      
        $request->validate([
            'name' => 'required',
            'speciality' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp,tiff'
        ]);

        $image = $request->hasFile('image');

        if($image){

            $file = $request->file('image');

$filename = $file->getClientOriginalName();

$fileExtension = $file->getClientOriginalExtension();

$filename_to_store = time() . "." . $filename;

$file = $file->move('storage/chefs',$filename_to_store);

$insert = Chef::create([
   
    'name' => $request->name,
    'speciality' => $request->speciality,
    'image' => $filename_to_store

]);

return redirect()->back()->with('status','Chef saved successfully');
           
}


}


public function chefs(){

    $chefs = Chef::all();

    return view('admin.chef',compact('chefs'));
}


public function editchef($id){
    
  $edit =  Chef::find($id);

    return view('admin.editchef',compact('edit'));
}


public function updatechef(Request $request,$id){
    $request->validate([
        'name' => 'required',
        'speciality' => 'required',
       
    ]);

    $image = $request->hasFile('image');

    if($image){

        $file = $request->file('image');

$filename = $file->getClientOriginalName();

$fileExtension = $file->getClientOriginalExtension();

$filename_to_store = time() . "." . $filename;

$file = $file->move('storage/chefs',$filename_to_store);

Chef::where('id',$id)->update([

'name' => $request->name,
'speciality' => $request->speciality,
'image' => $filename_to_store

]);

       
}else{

    Chef::where('id',$id)->update([

        'name' => $request->name,
        'speciality' => $request->speciality,
       
        
        ]);
        

}

return redirect()->back()->with('status', 'Chef details updated!');

}


public function destroychef($id){

   $delete =  Chef::find($id);

   $delete->delete();  

   return back();

}


public function reserve(){
    if(Auth::id()){

    $reserve = Reservation::all();
    return view('admin.admin_reservation',compact('reserve'));

    }else{

        return redirect('/login');

    }
}


    public function reservation(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'guest' => 'required',
            'date' => 'required|max:2022',
            'time' => 'required',
            'message' => 'required',
            
        ]);

         Reservation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'guest' => $request->guest,
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message,
         ]);

    
        return back()->with('status','Your reservation has being submitted');
       

    }


    public function orders(){
        $orders = Order::all();

        return view('admin.orders',compact('orders'));
    }

    public function search(Request $request){

        $search = $request->search;

        $orders = Order::where('name','Like','%'.$search.'%')->get();

        return view('admin.orders',compact('orders'));
    }

}
