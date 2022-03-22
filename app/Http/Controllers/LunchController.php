<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Lunch;

class LunchController extends Controller
{
    public function createLunch(){
        return view('admin.createLunch');
    }

    public function store(Request $request){

            $request->validate([
                'title' => 'required',
                'price' => 'required',
                'description' => 'required'
                
            ]);

            if($request->hasFile('lunch')){

            $image = $request->file('lunch');

            $filename = $image->getClientOriginalName();

            $filename_without_extention = pathinfo($filename, PATHINFO_FILENAME);

            $filenameExtension = $image->getClientOriginalExtension();

            $filename_to_store = time() . "-" . $filename_without_extention .".". $filenameExtension;

            $image->move('storage/lunch',$filename_to_store);
        
        
        $request->user()->Lunch()->create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $filename_to_store,
            'description' => $request->description
        ]);

        return redirect()->back()->with('status', 'Lunch created successfully!');

        } else {

            $request->user()->Lunch()->create([
                'user_id' => $request->user()->id,
                'title' => $request->title,
                'price' => $request->price,
                'description' => $request->description
            ]);
        
        return redirect()->back()->with('status', 'Lunch created successfully!');

        }
     
    }

    public function viewLunch(){

        $lunch = Lunch::all();

        return view('admin.viewLunch', compact('lunch'));
    }


    public function updateLunch($id){

        $lunch = Lunch::find($id);

        return view('admin.updateLunch', compact('lunch'));

    }

    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('lunch')){

        $image = $request->file('lunch');

        $filename = $image->getClientOriginalName();

        $fileNameExtension = $image->getClientOriginalExtension();

        $fileNameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);

        $fileNameToStore = time() . "-" . $fileNameWithoutExtension . $fileNameExtension;

       // dd($filenameExtension);

       $image->move('storage/Lunch',$fileNameToStore);

        $request->user()->Lunch()->where('id',$id)->update([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $fileNameToStore,
            'description' => $request->description
        ]);

        } else {
            $request->user()->Lunch()->where('id',$id)->update([
                'user_id' => $request->user()->id,
                'title' => $request->title,
                'price' => $request->price,
                'description' => $request->description
            ]);
        }
        
        return back()->with('status', 'Menu updated!');
    }


    public function deleteLunch($id){

        $delete = Lunch::find($id);

        $delete->delete();

        return back();
    }

    
}
