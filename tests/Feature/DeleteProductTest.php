<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Product;
use App\Http\Controllers\ProductControllerFake;

class DeleteProductTest extends TestCase
{
    public function testDeleteProduct() {
        $product = new Product;
        $controller = new ProductControllerFake();

        $product->name = 'Celular';
        $product->description = 'Aparelho 5g Samsung';
        $product->price = 2999.00;
        $product->image = 'Base 64 code';
        $product->category_id = 1;

        $responseCreate = $controller->store($product);

        $this->assertTrue($controller->delete($responseCreate->id));
    }

    public function testDeleteNonExistentProduct() {
        $product = new Product;
        $controller = new ProductControllerFake();

        $product->name = 'Celular';
        $product->description = 'Aparelho 5g Samsung';
        $product->price = 2999.00;
        $product->image = 'Base 64 code';
        $product->category_id = 1;

        $responseCreate = $controller->store($product);

        $this->assertFalse($controller->delete(2));
    }
}
