<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Breakfast;

class BreakfastController extends Controller
{
    public function createBreakfast(){
        return view('admin.createBreakfast');
    }

    public function store(Request $request){
        if($request->hasFile('breakfast')){

            $request->validate([
                'title' => 'required',
                'price' => 'required',
                'breakfast' => 'required|Mimes:jpeg,png,jfif,jpg',
                'description' => 'required'
                
            ]);

            $image = $request->file('breakfast');

            $filename = $image->getClientOriginalName();

            $filename_without_extention = pathinfo($filename, PATHINFO_FILENAME);

            $filenameExtension = $image->getClientOriginalExtension();

            $filename_to_store = time() . "-" . $filename_without_extention .".". $filenameExtension;

            $image->move('storage/breakfast',$filename_to_store);
        
        
        $request->user()->breakfast()->create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $filename_to_store,
            'description' => $request->description
        ]);

        }

        return redirect()->back()->with('status', 'Breakfast created successfully!');
     
    }

    public function viewBreakfast(){

        $breakfast = Breakfast::all();

        return view('admin.viewBreakfast', compact('breakfast'));
    }


    public function updateBreakfast($id){

        $breakfast = Breakfast::find($id);

        return view('admin.updateBreakfast', compact('breakfast'));

    }

    public function update(Request $request, $id){
       
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('breakfastImage')){

        $image = $request->file('breakfastImage');

        $filename = $image->getClientOriginalName();

        $fileNameExtension = $image->getClientOriginalExtension();

        $fileNameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);

        $fileNameToStore = time() . "-" . $fileNameWithoutExtension . $fileNameExtension;

       // dd($filenameExtension);

       $image->move('storage/breakfast',$fileNameToStore);

        $request->user()->Breakfast()->where('id',$id)->update([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $fileNameToStore,
            'description' => $request->description
        ]);

        } else {
            $request->user()->Breakfast()->where('id',$id)->update([
                'user_id' => $request->user()->id,
                'title' => $request->title,
                'price' => $request->price,
                'description' => $request->description
            ]);
        }

        return back()->with('status', 'Menu updated!');
    }


    public function deleteBreakfast($id){

        $delete = Breakfast::find($id);

        $delete->delete();

        return back();
    }

    
}
