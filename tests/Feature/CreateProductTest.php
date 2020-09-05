<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Product;
use App\Http\Controllers\ProductControllerFake;

class CreateProductTest extends TestCase
{
    public function testCreateProduct() {
        $product = new Product();
        $controller = new ProductControllerFake();

        $product->name = 'Celular';
        $product->description = 'Aparelho 5g Samsung';
        $product->price = 2999.00;
        $product->image = 'Base 64 code';
        $product->category_id = 1;

        $response = $controller->store($product);

        $this->assertJson(json_encode([
            $response->id => 1,
            $response->name => 'Celular',
            $response->description = 'Aparelho 5g Samsung',
            $response->price = 2999.00,
            $response->image = 'Base 64 code',
            $response->category_id = 1,
        ]));
    }
}
