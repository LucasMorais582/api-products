<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Product;
use App\Http\Controllers\ProductControllerFake;

class UpdateProductTest extends TestCase
{
    public function testUpdateProduct() {
        $product = new Product();
        $controller = new ProductControllerFake();

        $product->name = 'Celular';
        $product->description = 'Aparelho 5g Samsung';
        $product->price = 2999.00;
        $product->image = 'Base 64 code';
        $product->category_id = 1;

        $responseCreate = $controller->store($product);

        // Preechendo novos dados
        $responseCreate->name = 'Celular';
        $responseCreate->description = 'Aparelho 5g Apple';
        $responseCreate->price = 3999.00;
        $responseCreate->image = 'Base 64 code';
        $responseCreate->category_id = 2;

        $responseUpdate = $controller->update($responseCreate);

        $this->assertJson(json_encode([
            $responseUpdate->id = 1,
            $responseUpdate->name = 'Celular',
            $responseUpdate->description = 'Aparelho 5g Apple',
            $responseUpdate->price = 3999.00,
            $responseUpdate->image = 'Base 64 code',
            $responseCreate->category_id = 2,

        ]));
    }

    public function testUpdateNonExistentProduct() {
        $product = new Product();
        $controller = new ProductControllerFake();

        $product->name = 'Celular';
        $product->description = 'Aparelho 5g Samsung';
        $product->price = 2999.00;
        $product->image = 'Base 64 code';
        $product->category_id = 1;

        $responseCreate = $controller->store($product);

        // Preechendo novos dados
        $responseCreate->id = 2;
        $responseCreate->name = 'Celular';
        $responseCreate->description = 'Aparelho 5g Apple';
        $responseCreate->price = 3999.00;
        $responseCreate->image = 'Base 64 code';
        $responseCreate->category_id = 3;

        $responseUpdate = $controller->update($responseCreate);

        $this->assertFalse($responseUpdate);

    }
}
