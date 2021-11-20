<?php

namespace App\Http\Controllers;

use App\Requestlist;
use Illuminate\Http\Request;

class DataRequestApiController extends Controller
{
    public function index()
    {
        $products = Requestlist::all();
        return response()->json(['message' => 'Success', 'data' => $products]);
    }

    public function show($id)
    {
        $product = Requestlist::find($id);
        return response()->json(['message' => 'Success', 'data' => $product]);
    }

    public function store(Request $request)
    {
        $product = Requestlist::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Requestlist::find($id);
        $product->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $product]);
    }

    public function hapus($id)
    {
        $product = Requestlist::find($id);
        $product->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
