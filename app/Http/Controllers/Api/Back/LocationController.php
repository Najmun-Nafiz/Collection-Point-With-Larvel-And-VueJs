<?php

namespace App\Http\Controllers\Api\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Location;

use App\Http\Resources\Back\Location\LocationCollection;
use App\Http\Resources\Back\Location\LocationResource;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new LocationCollection(Location::orderBy('id', 'DESC')->paginate(5));
    }


    public function search($field, $query)
    {
        return new LocationCollection(Location::where($field,'LIKE',"%$query%")->latest()->paginate(3));
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
            'name'=>'required',
        ]);

        $data = new Location;
        $data -> name = $request -> name;
        $data -> status = false;
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
        return new LocationResource(Location::find($id));
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
            'name'=>'required',
        ]);

        $data = Location::find($id);
        $data -> name = $request -> name;
        $data -> status = false;
        $data-> update();
    }


    public function active($id)
    {
        $data = Location::find($id);
        $data -> status = true;
        $data -> save();
    }

    public function unactive($id)
    {
        $data = Location::find($id);
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
        $data = Location::findOrFail($id);
        $data->delete();
    }
}
