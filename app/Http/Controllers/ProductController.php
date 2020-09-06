<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Product;
use App\Category;


class ProductController extends Controller
{
    public function status() {
        return ['status' => 'conected'];
    }

    public function list() {
        $product = Product::all();
        $lenght = count($product);

        if($lenght == 0) return abort(204);

        return $product;
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        return $product;
    }

    public function store(Request $request){
        try {
            $category = Category::findOrFail($request->category_id);

            // Realizar codificação da imagem para base64

            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category_id,
            ]);

            return response()->json(['product' => $product], 201);

        } catch(\Exception $error) {
            return Response::json([
                'Response' => $error
            ], 400);
        }
    }

    public function update(Request $request, $id){
        try {
            $product = Product::where('id', $id)->update($request->all());

            if($product) return ['product' => $id];

            return abort(404);

        } catch(\Exception $error) {
            return Response::json([
                'Response' => $error
            ], 400);
        }
    }

    public function delete($id){
        try {
            $product = Product::findOrFail($id);
            $product->delete();

            return ['product deleted with success'];

        } catch(\Exception $error) {
            return ['response' => 'Error', 'details' => $error];
        }
    }
}
