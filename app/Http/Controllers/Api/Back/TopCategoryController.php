<?php

namespace App\Http\Controllers\Api\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Topcategory;

use App\Http\Resources\Back\TopCategory\TopCategoryResource;
use App\Http\Resources\Back\TopCategory\TopCategoryCollection;

class TopCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new TopCategoryCollection(Topcategory::orderBy('id', 'DESC')->paginate(3));
    }

    public function search($field, $query)
    {
        return new TopCategoryCollection(Topcategory::where($field,'LIKE',"%$query%")->latest()->paginate(3));
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

        $data = new Topcategory;
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
        return new TopCategoryResource(Topcategory::find($id));
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

        $data = Topcategory::find($id);
        $data -> name = $request -> name;
        $data -> status = false;
        $data-> update();
    }

    public function active($id)
    {
        $data = Topcategory::find($id);
        $data -> status = true;
        $data -> save();
    }

    public function unactive($id)
    {
        $data = Topcategory::find($id);
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
        $data = Topcategory::findOrFail($id);
        $data->delete();
    }
}
