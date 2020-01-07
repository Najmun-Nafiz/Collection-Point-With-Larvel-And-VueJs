<?php

namespace App\Http\Controllers\Api\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Newsletter;

use App\Http\Resources\Back\Newsletter\NewsletterCollection;
use App\Http\Resources\Back\Newsletter\NewsletterResource;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new NewsletterCollection(Newsletter::orderBy('id', 'DESC')->paginate(5));
    }


    public function search($field, $query)
    {
        return new NewsletterCollection(Newsletter::where($field,'LIKE',"%$query%")->latest()->paginate(3));
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
            'twitter'=>'required',
            'facebook'=>'required',
            'linkedin'=>'required',
            'youtube'=>'required',
            'instagram'=>'required',
            'content'=>'required',
        ]);

        $data = new Newsletter;
        $data -> facebook = $request -> facebook;
        $data -> twitter = $request -> twitter;
        $data -> linkedin = $request -> linkedin;
        $data -> youtube = $request -> youtube;
        $data -> instagram = $request -> instagram;
        $data -> content = $request -> content;
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
        return new NewsletterResource(Newsletter::find($id));
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
            'twitter'=>'required',
            'facebook'=>'required',
            'linkedin'=>'required',
            'youtube'=>'required',
            'instagram'=>'required',
            'content'=>'required',
        ]);

        $data = Newsletter::findOrFail($id);
        $data -> facebook = $request -> facebook;
        $data -> twitter = $request -> twitter;
        $data -> linkedin = $request -> linkedin;
        $data -> youtube = $request -> youtube;
        $data -> instagram = $request -> instagram;
        $data -> content = $request -> content;
        $data -> status = false;
        $data-> update();
    }

    public function active($id)
    {
        $data = Newsletter::find($id);
        $data -> status = true;
        $data -> save();
    }

    public function unactive($id)
    {
        $data = Newsletter::find($id);
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
        $data = Newsletter::findOrFail($id);
        $data->delete();
    }
}
