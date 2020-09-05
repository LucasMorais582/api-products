<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryControllerFake extends Controller
{
    private $id = 1;
    private $name;

    public function store($category){

        if(empty($this->name))
            $this->name = $category->name;

        else{
            if($this->name == $category->name)
                return false;
        }

        if (gettype($category->name) == 'string'){
            $category->id = 1;
            return $category;
        }

        else return false;
    }

    public function update($category){

        if($this->id == $category->id && gettype($category->name) == 'string')
            return $category;

        else return false;
    }

    public function delete($id){
        if($this->id == $id) return true;

        else return false;
    }
}
