<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class UserController extends Controller
{
    public function show()
    {
        return view('user_show')->with('itemArr',\App\Models\ProdUser::with('image')->get());
    }

    public function create(Request $request)
    {
        return view('user_create');
    }

    public function store(Request $request)
    {

        $item = new \App\Models\ProdUser();
        $item->name = $request->get('name');
        $item->save();

        $photo = new \App\Models\Photo();
        $photo->imageable_id = $item->id;
        $photo->imageable_type = 'App\Models\ProdUser';
        $photo->filename =  $request->get('photo');
        $photo->save();

        return redirect('user_show');
    }

    public function delete(Request $request, $id)
    {
        
        \App\Models\ProdUser::destroy(array('id',$id));
        \App\Models\Photo::where('imageable_id',$id)->where('imageable_type','App\Models\ProdUser')->delete();
    
        return redirect('user_show');
    }

    public function edit(Request $request, $id)
    {
        
        return view('user_edit')->with('itemArr',\App\Models\ProdUser::with('image')->find($id));
    }

    public function update(Request $request, $id)
    {
        $item = \App\Models\ProdUser::find($id);
        $item->name = $request->get('name');
        $item->save();

        $photo = \App\Models\Photo::where('imageable_id', $id)->first();;
        $photo->filename =  $request->get('photo');
        $photo->save();

        return redirect('user_show');
    }
}
