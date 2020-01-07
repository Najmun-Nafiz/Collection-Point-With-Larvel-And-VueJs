<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use\Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

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
        // return redirect()->route('back');
        return view('welcome');
    }




    public function profile_change($id)
    {
        $data = User::find($id);
        return view('auth.profile', compact('data'));
    }

    public function profile_update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $data = User::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if(file_exists('uploads/users/'.$data->image)){
                unlink('uploads/users/'.$data->image);
            }
            
            $image->move('uploads/users',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        
        $data->name = $request->name;
        $data->email = $request->email;
        $data->image = $imagename;
        $mama = $data->update();

        if($mama){
            Toastr::success('Profile Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('back');
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }
    
}
