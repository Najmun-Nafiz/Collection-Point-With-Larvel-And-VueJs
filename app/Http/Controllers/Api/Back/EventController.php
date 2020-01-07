<?php

namespace App\Http\Controllers\Api\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Event;
use App\Admin\Category;

use\Carbon\Carbon;
use App\Http\Resources\Back\Event\EventCollection;
use App\Http\Resources\Back\Event\EventResource;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'DESC')->with('category')->paginate();
        return response($events);
    }

    public function search($field, $query)
    {
        return new EventCollection(Event::where($field,'LIKE',"%$query%")->latest()->paginate(3));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'category_id'=>'required',
            'description'=>'required',
            'rating'=>'required',
            // 'image'=>'required',
            // 'image' => 'required|mimes:jpeg,jpg,png',
        ]);


        if($request->get('image')) 
        {
            $image = $request->get('image');
            $name = time().'.' .explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];

            if (!file_exists('uploads/event/')) {
                mkdir('uploads/event/',0777,true);
            }
            \Image::make($request->get('image'))->save(public_path('uploads/event/').$name);
        }
        else{
            $name = 'default.png';
        }


        $data = new Event;
        $data -> title = $request -> title;
        $data -> category_id = $request -> category_id;
        $data -> description = $request -> description;
        $data -> rating = $request -> rating;
        $data -> status = false;
        $data -> image = $name;
        $data-> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'category_id'=>'required',
            'description'=>'required',
            'rating'=>'required',
            // 'image'=>'required',
            // 'image' => 'required|mimes:jpeg,jpg,png',
        ]);


        $data = Event::find($id);

        if($request->get('image')) 
        {
            $image = $request->get('image');
            $name = time().'.' .explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];

            if (!file_exists('uploads/event/')) {
                mkdir('uploads/event/',0777,true);
            }
            unlink('uploads/event/'.$data->image);
            \Image::make($request->get('image'))->save(public_path('uploads/event/').$name);
        }
        else{
            $name = 'default.png';
        }


        
        $data -> title = $request -> title;
        $data -> category_id = $request -> category_id;
        $data -> description = $request -> description;
        $data -> rating = $request -> rating;
        $data -> status = false;
        $data -> image = $name;
        $data-> update();
    }

    public function active($id)
    {
        $data = Event::find($id);
        $data -> status = true;
        $data -> save();
    }

    public function unactive($id)
    {
        $data = Event::find($id);
        $data -> status = false;
        $data -> save();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Event::findOrFail($id);
        if(file_exists('uploads/event/'.$data->image)){
            unlink('uploads/event/'.$data->image);
        }
        $data->delete();
    }
}
