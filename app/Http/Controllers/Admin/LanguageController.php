<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Language;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Auth;

class LanguageController extends Controller
{
    public function index()
    {
        $index['data'] = Language::get();
        return view("language.index", $index);
    }

    public function create()
    {
        return view("language.create");
    }

    public function show($id)
    {
        $index['data'] = Plan::find($id);
        return view('language.show',$index);
    }

    public function language_status(Request $request)
    {
        $user = Language::find($request->get("id"));
        $user->status = ($request->get("checked")=="true")?1:0;
        $user->save();
    }

    public function plan_most_popular(Request $request)
    {
        $sub = Plan::get();
        foreach($sub as $s)
        {
            $language = Plan::find($s->id);
            $language->most_popular = 0;
            $language->save();
        }
        $language = Plan::find($request->get("id"));
        $language->most_popular = ($request->get("checked")=="true")?1:0;
        $language->save();
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'direction' => 'required',
            "word_json" => 'required',
        ]);

        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        } 
        else 
        {
            $id = Language::create([
                "name" => $request->get("name"),
                "direction" => $request->get("direction"),
                "word_json" => $request->get("word_json"),
                "status" => 0,
            ])->id;
           
            return redirect()->route("language.index");
        }
    }

    public function edit($id)
    {
        $index['language'] = Language::find($id);
        return view("language.edit", $index);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'direction' => 'required',
            "word_json" => 'required',
        ]);

        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        } else {
            $language = Language::find($request->get("id"));
            $language->name = $request->name;
            $language->direction = $request->direction;
            $language->word_json = $request->word_json;
            $language->save();

            return redirect()->route('language.index');
        }
    }

    public function destroy($id)
    {
        Language::find($id)?->delete();

        return redirect()->route('language.index');
    }
}
