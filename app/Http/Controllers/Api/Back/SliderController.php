<?php

namespace App\Http\Controllers\Api\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Slider;
use App\Admin\Category;

use\Carbon\Carbon;

use App\Http\Resources\Back\Slider\SliderCollection;
use App\Http\Resources\Back\Slider\SliderResource;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'DESC')->with('category')->paginate();
        return response($sliders);
    }


    public function search($field, $query)
    {
        return new SliderCollection(Slider::where($field,'LIKE',"%$query%")->latest()->paginate(3));
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
            'generation'=>'required',
            // 'image'=>'required',
            // 'image' => 'required|mimes:jpeg,jpg,png',
        ]);


        if($request->get('image')) 
        {
            $image = $request->get('image');
            $name = time().'.' .explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];

            if (!file_exists('uploads/slider/')) {
                mkdir('uploads/slider/',0777,true);
            }
            \Image::make($request->get('image'))->save(public_path('uploads/slider/').$name);
        }
        else{
            $name = 'default.png';
        }


        $data = new Slider;
        $data -> title = $request -> title;
        $data -> category_id = $request -> category_id;
        $data -> generation = $request -> generation;
        $data -> status = false;
        $data -> image = $name;
        $data->save();
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
            'generation'=>'required',
            // 'image'=>'required',
            // 'image' => 'required|mimes:jpeg,jpg,png',
        ]);


        $data = Slider::findOrFail($id);

        if($request->get('image')) 
        {
            $image = $request->get('image');
            $name = time().'.' .explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];

            if (!file_exists('uploads/slider/')) {
                mkdir('uploads/slider/',0777,true);
            }
            unlink('uploads/slider/'.$data->image);
            \Image::make($request->get('image'))->save(public_path('uploads/slider/').$name);
        }
        else{
            $name = 'default.png';
        }


        
        $data -> title = $request -> title;
        $data -> category_id = $request -> category_id;
        $data -> generation = $request -> generation;
        $data -> status = false;
        $data -> image = $name;
        $data-> update();
    }


    public function active($id)
    {
        $data = Slider::find($id);
        $data -> status = true;
        $data -> save();
    }

    public function unactive($id)
    {
        $data = Slider::find($id);
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
        $data = Slider::findOrFail($id);
        if(file_exists('uploads/slider/'.$data->image)){
            unlink('uploads/slider/'.$data->image);
        }
        $data->delete();
    }
}
