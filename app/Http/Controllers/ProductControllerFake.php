<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControllerFake extends Controller
{
    private $id = 1;
    private $category_id = 1, $category_id2 = 2;

    public function store($product){

        if (gettype($product->name) == 'string' &&
            gettype($product->description) == 'string' &&
            gettype($product->price) == 'double' &&
            gettype($product->image) == 'string' &&
            $product->category_id == $this->category_id){

            $product->id = 1;
            return $product;
        }

        else return false;
    }

    public function update($product){

        if($this->id == $product->id &&
            gettype($product->name) == 'string' &&
            gettype($product->description) == 'string' &&
            gettype($product->price) == 'double' &&
            gettype($product->image) == 'string' &&
            $product->category_id == $this->category_id2
        )
            return $product;

        else return false;
    }

    public function delete($id){
        if($this->id == $id) return true;

        else return false;
    }
}
