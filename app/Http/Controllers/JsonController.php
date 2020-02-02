<?php

namespace App\Http\Controllers;

use App\Json;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jsons = Json::all();
        return view('index', ['jsons' => $jsons]);
    }


    public function createview()
    {
        return view('create');
    }

    public function create(Request $request)
    {
        $article = Json::create([
            'name' => $request->name,
            'response' => $request->response,
        ]);
        return redirect('/');
    }

    public function editview($id)
    {
        $json = Json::find($id);
        return view('edit', ['json' => $json]);
    }

    public function edit(Request $request, $id)
    {
        $json = Json::find($id);
        $json->name = $request->name;
        $json->response = $request->response;
        $json->save();

        return redirect('/');
    }

}