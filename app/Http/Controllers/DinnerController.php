<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Dinner;

class DinnerController extends Controller
{
    public function createDinner(){
        return view('admin.createDinner');
    }

    public function store(Request $request){

            $request->validate([
                'title' => 'required',
                'price' => 'required',
                'description' => 'required'
                
            ]);

            if($request->hasFile('dinner')){

            $image = $request->file('dinner');

            $filename = $image->getClientOriginalName();

            $filename_without_extention = pathinfo($filename, PATHINFO_FILENAME);

            $filenameExtension = $image->getClientOriginalExtension();

            $filename_to_store = time() . "-" . $filename_without_extention .".". $filenameExtension;

            $image->move('storage/Dinner',$filename_to_store);
        
        
        $request->user()->dinner()->create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $filename_to_store,
            'description' => $request->description
        ]);

        return redirect()->back()->with('status', 'Dinner created successfully!');

        } else {

            $request->user()->dinner()->create([
                'user_id' => $request->user()->id,
                'title' => $request->title,
                'price' => $request->price,
                'description' => $request->description
            ]);
        
        return redirect()->back()->with('status', 'Dinner created successfully!');

        }
     
    }

    public function viewDinner(){

        $dinner = Dinner::all();

        return view('admin.viewDinner', compact('dinner'));
    }


    public function updateDinner($id){

        $dinner = Dinner::find($id);

        return view('admin.updateDinner', compact('dinner'));

    }

    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('dinner')){

        $image = $request->file('dinner');

        $filename = $image->getClientOriginalName();

        $fileNameExtension = $image->getClientOriginalExtension();

        $fileNameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);

        $fileNameToStore = time() . "-" . $fileNameWithoutExtension . $fileNameExtension;

       // dd($filenameExtension);

       $image->move('storage/Dinner',$fileNameToStore);

        $request->user()->Dinner()->where('id',$id)->update([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $fileNameToStore,
            'description' => $request->description
        ]);

        } else {
            $request->user()->Dinner()->where('id',$id)->update([
                'user_id' => $request->user()->id,
                'title' => $request->title,
                'price' => $request->price,
                'description' => $request->description
            ]);
        }
        
        return back()->with('status', 'Menu updated!');
    }


    public function deleteDinner($id){

        $delete = Dinner::find($id);

        $delete->delete();

        return back();
    }

    
}
