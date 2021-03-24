<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class ItemController extends Controller
{
    public function show()
    {
        return view('item_show')->with('itemArr',\App\Models\Item::with('image')->get());
    }

    public function create(Request $request)
    {
        return view('item_create');
    }

    public function store(Request $request)
    {

        $item = new \App\Models\Item();
        $item->name = $request->get('name');
        $item->price = $request->get('price');
        $item->save();

        $photo = new Photo();
        $photo->imageable_id = $item->id;
        $photo->imageable_type = 'App\Models\Item';
        $photo->filename =  $request->get('photo');
        $photo->save();

        return redirect('item_show');
    }

    public function delete(Request $request, $id)
    {
        
        \App\Models\Item::destroy(array('id',$id));
        \App\Models\Photo::where('imageable_id',$id)->where('imageable_type','App\Models\Item')->delete();
    
        return redirect('item_show');
    }

    public function edit(Request $request, $id)
    {
        
        return view('item_edit')->with('itemArr',\App\Models\Item::with('image')->find($id));
    }

    public function update(Request $request, $id)
    {
        $item = \App\Models\Item::find($id);
        $item->name = $request->get('name');
        $item->price = $request->get('price');
        $item->save();

        $photo = \App\Models\Photo::where('imageable_id', $id)->first();;
        $photo->filename =  $request->get('photo');
        $photo->save();

        return redirect('item_show');
    }
}
